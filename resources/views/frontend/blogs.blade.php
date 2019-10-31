@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        <h1>Blog page</h1>
        @foreach($blogs as $blog)

            <div class="blog-post">
                <h2 class="blog-post-title">{{ $blog->name }}</h2>
                <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
                <p>{{ $blog->content }}</p>
            </div><!-- /.blog-post -->

        @endforeach
    </div>

@endsection
