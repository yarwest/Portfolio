@extends('layouts.app')
@section('title', '- Portfolio')
@section('class', 'portfolio-page')

@section('content')
    <div class="container" style="margin-top:50px;">
        <h1 class="title text-center">Portfolio</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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