@extends('layouts.app')
@section('title', '- Contact')
@section('class', 'contact-page')

@section('content')
    <div class="container" style="margin-top:50px;">
        <h1 class="title text-center">Contact Me</h1>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <p style="margin-bottom: 15px;">Feel free to contact me using any of the methods listed here :)</p>
                @foreach($site_meta as $data)
                    @if($data->isLink)
                        <p><a href="{{$data->value}}">{{$data->name}}</a></p>
                    @else
                        <p>{{$data->name}} <i class="fa fa-{{$data->name==='Email' ? 'envelope':'phone'}}" aria-hidden="true"></i> : {{$data->value}}</p>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
