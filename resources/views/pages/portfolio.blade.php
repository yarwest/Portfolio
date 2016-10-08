@extends('layouts.app')
@section('title', '- Portfolio')
@section('class', 'portfolio-page')
@section('header')

@endsection

@section('content')
    <div class="container">
        <h1 class="title text-center">Portfolio</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($portfolio_items) > 0)
                    @foreach($portfolio_items as $item)
                        <h3>{{$item->name}}</h3>
                        @if(!is_null($item->link))
                            <a href="{{$item->link}}">Check out the project online</a>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection