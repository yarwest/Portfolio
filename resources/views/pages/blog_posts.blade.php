@extends('layouts.app')
@section('title', '- Blog')
@section('class', 'blog-page')

@section('content')
    <div class="container" style="margin-top:50px;">
        <h1 class="title text-center">{{$blog}}</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($blog_posts) > 0)
                    @foreach($blog_posts as $post)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 style="margin-top:0px !important;">{{$post->title}}</h3>
                            </div>
                            <div class="panel-body">
                                {!!$post->body!!}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
