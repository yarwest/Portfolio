@extends('layouts.app')
@section('title', '- Blog')
@section('class', 'blog-page')

@section('content')
    <div class="container" style="margin-top:50px;">
        <h1 class="title text-center">Blog</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>These are blogs that I have written based on my experience while learning a language. This started out as a school assignment and I decided to keep it going.</p>
                @if(count($blogs) > 0)
                    @foreach($blogs as $blog)
                        <div class="well">
                            <a href="/blog/{{$blog->name}}"><h3 style="margin-top:0px !important;">{{$blog->name}}</h3></a>
                            {!!$blog->desc!!}
                            <a href="/blog/{{$blog->name}}"><button class="btn btn-primary btn-raised">Check out the blog!</button></a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
