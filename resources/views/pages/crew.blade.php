@extends('layouts.app')
@section('title', '- The Crew')
@section('class', 'crew-page')
@section('header')

@endsection

@section('content')
    <div class="container">
        <h1 class="title text-center">The Crew</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>Insert story about the crew/collab whatever</p>
                @foreach($members as $member)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$member->name}}</h3>
                        </div>
                        <div class="panel-body">
                            @if(!is_null($member->img_name))
                                <img src="/images/{{$member->img_name}}" alt="{{$member->name}}" style="float: left; margin-right: 15px" height="200" width="200">
                            @endif
                            {{$member->desc}}
                        </div>
                        <div class="panel-footer">
                            Checkout his <a href="http://github.com/{{$member->github}}">Github page</a>
                            @if(!is_null($member->website))
                                 and his <a href="{{$member->website}}">personal website</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection