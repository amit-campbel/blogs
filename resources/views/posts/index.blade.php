@extends('layouts.app')

@section('content')

<div class="white-bg">
    <div id="site_banner" class="text-center clearfix">
        <div class="container">
            <h1>Amie's Blog</h1>
        </div>
    </div>

    <div id="blogs_list" class="">
        <div class="container">
            @if (isset($posts) && count($posts))
                @foreach ($posts as $post)
                    <div class="post-row">
                        <h5><a href="/posts/view/{{ $post->id }}">{{ $post->title }}</a></h5>
                        <div>
                            {{ $post->description }}
                        </div>
                        <div>{{ date( 'M d, Y H:i:s', strtotime( $post->created_at ) ) }}</div>
                        @if (Auth::check() && Auth::user()->id == $post->created_by)
                            <div>
                                <a href="/posts/edit/{{ $post->id }}">Edit</a>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection