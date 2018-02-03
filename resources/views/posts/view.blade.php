@extends('layouts.app')

@section('content')

<div class="white-bg">
    <div id="site_banner" class="text-center clearfix">
        <div class="container">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>

    <div id="blogs_list" class="">
        <div class="container">
            <div class="post-row text-center">
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
        </div>
    </div>
</div>
@endsection