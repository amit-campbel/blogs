<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    //
    public function create()
    {
        return view('posts.create');
    }

    public function edit(Request $request, $id)
    {
        $post = Post::find($id);

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        $details = $request->all();
        $request->validate(Post::$rules);

        $details['created_by'] = Auth::user()->id;
        $details['updated_by'] = Auth::user()->id;
        if (Post::create($details)) {
            return redirect()->route('home');
        } else {
            return Redirect::back()->withErrors(['Error occured while creating post']);
        }
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $details = $request->all();

        $request->validate(Post::$rules);

        if ($post->update(['title' => $details['title'], 'description' => $details['description'], 'updated_by' => Auth::user()->id])) {
            return redirect()->route('home');
        } else {
            return Redirect::back()->withErrors(['Error occured while creating post']);
        };
    }

    public function view(Request $request, $id)
    {
        $post = Post::find($id);

        return view('posts.view', [
            'post' => $post
        ]);
    }    

    public function index(Request $request)
    {
        if (Auth::user()->isAdmin()) {
            $posts = Post::paginate(20);
        } else {
            $posts = Post::where('created_by', Auth::user()->id)->paginate(20);
        }

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
