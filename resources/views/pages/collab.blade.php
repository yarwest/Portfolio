@extends('layouts.app')
@section('title', '- Collab Corp')
@section('class', 'crew-page')

@section('content')
    <div class="container" style="margin-top:50px; margin-bottom: 20px;">
        <h1 class="title text-center">Collab Corp</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>Collab Corp is a group of passionate web developers that love developing websites, web applications and packages together. The group originated on devRant when Sergio Compean requested help with the website for his fathers orchard business.</p>
                @if(count($portfolio_items) > 0)
                    <p>So far Collab Corp has developed (or is working on) the following:</p>
                    <ul>
                        @foreach($portfolio_items as $item)
                            <li><a href="{{$item->link}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                @endif
                <p>Interested in joining this collaboration? New participants are always welcome, so head over to the <a href="/contact">contact page</a> and fill in the form! You can also check out the organization on <a href="https://github.com/collab-corp">Github!</a></p>
                @foreach($members as $member)
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$member->name}}</h3>
                        </div>
                        <div class="panel-body">
                            @if(!is_null($member->img_name))
                                <img src="/images/crew/{{$member->img_name}}" alt="{{$member->name}}" style="float: left; margin-right: 15px" height="200" width="200">
                            @endif
                            {{$member->desc}}
                        </div>
                        <div class="panel-footer panel-primary">
                            Check out his <a href="http://github.com/{{$member->github}}">Github page</a>
                            @if(!is_null($member->website))
                                 and his <a href="{{$member->website}}">personal website</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection