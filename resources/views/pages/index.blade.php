@extends('layouts.app')

@section('class', 'home-page') {{-- Adds the class to the body, so we can change the style of the header depending on the current page --}}
@section('header')

  <div class="page-header">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-3 thumbnail text-center"  id="pickup-thumbnail">
                <img src="images/yarwest_logo.svg" style="height:150px !important;" alt="Yarwest Logo" class="img-responsive center-block">
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
                    I am very passionate about software development and I am always thinking up new projects to work on.<br>
                    To me, the most important thing about the products that I make is the quality of both the functionality and the code itself.<br>
                    I regularly work with (amongst others):</p>
                <ul>
                    <li>PHP <i class="fa fa-server" aria-hidden="true"></i> (Laravel)</li>
                    <li>JavaScript <i class="fa fa-code" aria-hidden="true"></i> (jQuery, VueJS, NodeJS)</li>
                    <li>Ruby <i class="fa fa-diamond" aria-hidden="true"></i> (on Rails)</li>
                    <li>Java <i class="fa fa-coffee" aria-hidden="true"></i></li>
                    <li>databases <i class="fa fa-database" aria-hidden="true"></i> (MySQL, MSSQL, PostgreSQL)</li>
                    <li>HTML5 <i class="fa fa-html5" aria-hidden="true"></i> CSS3 <i class="fa fa-css3" aria-hidden="true"></i> Bootstrap and SASS</li>
                </ul>
                <p>Aside from that I am very passionate about traveling, languages and snowboarding.</p>

                <h4>What can I do for you?</h4>
                <p>One of the best ways of getting your brand, product or concepts known to the public is trough a website. I am able to create and deploy a promotional web application using a variety of modern web technologies.</p>
                <p>More complex web or desktop applications are something I am very passionate about, the requirements and specifications of which are something that can always be discussed.</p>
                <p>To find out more, fill in the <a href="/contact">contact form</a></p>
                <div id="button-container" style="text-align: center;">
                    <a href="/resume.pdf" class="btn btn-primary btn-raised">Click here to see my (dutch) resume</a>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
