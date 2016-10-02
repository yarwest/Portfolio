@extends('layouts.app')
@section('title', '- Contact')
@section('class', 'contact-page')
@section('header')

@endsection

@section('content')
    <div class="container">
        <h1 class="title text-center">Contact Me</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::open(['url'=>'contact/send', 'method'=>'POST', 'class'=>'form-horizontal']) }}
                <div class="form-group">
                    <label for="nom" class="col-sm-4 control-label">Full Name</label>
                    <div class="col-sm-8">
                        {{ Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Ex: Barry White', 'required'])}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Email Address</label>
                    <div class="col-sm-8">
                        {{ Form::email('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'Ex: barry@gmail.com', 'required']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-4 control-label">Message</label>
                    <div class="col-sm-8">
                        {{ Form::textarea('message', null,['class'=>'form-control','id'=>'message','placeholder'=>'Enter your message here', 'required']) }}
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::submit('Send', ['class'=>'btn btn-success btn-raised']) }}
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
    </div>
@endsection
