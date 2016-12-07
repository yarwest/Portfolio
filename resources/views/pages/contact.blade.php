@extends('layouts.app')
@section('title', '- Contact')
@section('class', 'contact-page')

@section('content')
    <div class="container" style="margin-top:50px;">
        <h1 class="title text-center">Contact Me</h1>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <p style="margin-bottom: 15px;">Feel free to contact me using the form below or any of the other methods listed here :)</p>
                @foreach($site_meta as $data)
                    @if($data->isLink)
                        <p><a href="{{$data->value}}">{{$data->name}}</a></p>
                    @else
                        <p>{{$data->name}} <i class="fa fa-{{$data->name==='Email' ? 'envelope':'phone'}}" aria-hidden="true"></i> : {{$data->value}}</p>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                {{ Form::open(['url'=>'contact/send', 'method'=>'POST', 'class'=>'form-horizontal']) }}
                <div class="form-group">
                    <label for="name" class="col-xs-4 control-label">Full Name</label>
                    <div class="col-xs-7">
                        {{ Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Ex: John Doe', 'required'])}}
                    </div>
                </div>
                <div class="form-group" style="display:none;">
                    <label for="birthday" class="col-xs-4 control-label">Birthday</label>
                    <div class="col-xs-7">
                        {{ Form::text('birthday',null,['class'=>'form-control','id'=>'birthday','placeholder'=>'Ex:'])}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-xs-4 control-label">Email Address</label>
                    <div class="col-xs-7">
                        {{ Form::email('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'Ex: john@gmail.com', 'required']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-xs-4 control-label">Message</label>
                    <div class="col-xs-7">
                        {{ Form::textarea('message', null,['class'=>'form-control','id'=>'message','placeholder'=>'Enter your message here', 'required']) }}
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::submit('Send', ['class'=>'btn btn-primary btn-raised']) }}
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection
