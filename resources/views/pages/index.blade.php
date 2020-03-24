@extends('layouts.app')

@section('class', 'home-page') {{-- Adds the class to the body, so we can change the style of the header depending on the current page --}}
@section('header')

  <div class="page-header">
    <div class="container">

        <div class="row">
            <div class="col-md-2 col-md-offset-5 thumbnail text-center">
                <img src="images/yarwest_logo.jpg" style="height:150px !important;" alt="Yarwest Logo" class="img-responsie center-block">
            </div>
        </div>
    </div>
  </div>



@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4>Welcome!</h4>
                <p>My name is Yarno Boelens and I am a computer science student.<br>
                    I am very passionate about software development and I am always thinking up new projects to work on. 
                    To me, the most important thing about the products that I make is the quality of both the functionality and the code itself.<br>
                    I would describe myself as energetic, creative and a quick learner.<br>
                    My current goal is to graduate with a bachelors in computer science. In order to achieve this, I am looking for a company with an interesting internship assignment that I can fully invest myself in.<br>
                    I am open to long and short term opportunities, both on-site and remote, anywhere in Europe.</p>
                <p>I regularly work with (amongst others):</p>
                <ul>
                    <li>JavaScript <i class="fab fa-lg fa-js-square" aria-hidden="true"></i> (Vue.js, React (Native), Node.js)</li>
                    <li>Java <i class="fas fa-lg fa-coffee" aria-hidden="true"></i></li>
                    <li>Ruby <i class="fas fa-lg fa-gem" aria-hidden="true"></i> (on Rails)</li>
                    <li>Python <i class="fab fa-lg fa-python" aria-hidden="true"></i></li>
                    <li>PHP <i class="fas fa-lg fa-server" aria-hidden="true"></i> (Laravel)</li>
                    <li>databases <i class="fas fa-lg fa-database" aria-hidden="true"></i> (MySQL, PostgreSQL, MongoDB, DynamoDB, Firestore)</li>
                    <li>HTML5 <i class="fab fa-lg fa-html5" aria-hidden="true"></i> CSS3 <i class="fab fa-lg fa-css3-alt" aria-hidden="true"></i> and SCSS</li>
                </ul>
                <p>Aside from that I am very passionate about traveling, languages and snowboarding.</p>

                <p>Feel free to reach out to me through one of the ways mentioned below.</p>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <p style="margin-bottom: 15px;">Feel free to contact me using any of the methods listed here:</p>
                        @foreach($site_meta as $data)
                            @if($data->isLink)
                                <p><a href="{{$data->value}}">{{$data->name}}</a> <i class="fab fa-lg fa-{{strtolower($data->name)}}" aria-hidden="true"></i></p>
                            @elseif($data->name === 'Email')
                                <p>{{$data->name}} <i class="fas fa-lg fa-envelope" aria-hidden="true"></i> :<br>
                                    <a href="mailto:{{$data->value}}">{{$data->value}}</a>
                                </p>
                            @elseif(is_int(stripos($data->name, 'phone')))
                                <p>{{$data->name}} <i class="fas fa-lg fa-phone" aria-hidden="true"></i> :<br>
                                    <a href="tel:{{$data->value}}">{{$data->value}}</a>
                                </p>
                            @else
                                <p>{{$data->name}} :<br> {{$data->value}}</p>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div id="button-container" style="text-align: center;">
                    <a href="/resume.pdf" class="btn btn-primary btn-raised">
                        Click here to see my<br>
                        resume
                    </a>
                </div>
                <p style="text-align: center">(Resume based on <a href="https://gumroad.com/l/resumecousteau">The Cousteau</a> by Amy Dozier)</p>
            </div>
        </div>
        <br>
    </div>
@endsection
