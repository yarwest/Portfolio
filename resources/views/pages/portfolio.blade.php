@extends('layouts.app')
@section('title', '- Portfolio')
@section('class', 'portfolio-page')

@section('content')
    <div class="container" style="margin-top:50px;">
        <h1 class="title text-center">Portfolio</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>These are (almost) all of the projects that I have worked or are still working on, either by myself or with a team. A number of these projects are open source on Github, head over to my <a href="http://github.com/yarwest">Github profile</a> where you can find a good amount of them.<br>If you want to know more about a certain project or take a look at the code, feel free to fill in the <a href="/contact">contact form</a>.<br>(You can click on an image to enlargen it)</p>
                @if(count($portfolio_items) > 0)
                    @foreach($portfolio_items as $item)
                        <div class="well">
                            <h3 style="margin-top:0px !important;">{{$item->name}}</h3>
                            <p>{!!$item->desc!!}</p>
                            @if(!is_null($item->link))
                                <a href="{{$item->link}}">Check out the project online</a>
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection