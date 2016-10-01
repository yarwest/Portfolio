@extends('layouts.app')

@section('class', 'home-page') {{-- Adds the class to the body, so we can change the style of the header depending on the current page --}}
@section('header')
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-3 thumbnail text-center"  id="pickup-thumbnail">
                <img src="images/yarwest_logo.png" alt="Yarwest Logo" class="img-responsive center-block">
            </div>
        </div>
    </div>



@endsection
@section('content')
    <div class="container">
        <h2>Site Meta</h2>
        @foreach($site_meta as $data)
            <p>{{$data->name}}: {{$data->value}}</p>
        @endforeach
    </div>
@endsection