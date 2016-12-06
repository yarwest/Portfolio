@extends('layouts.app')
@section('title', '- Runtimerror')
@section('class', 'runtimerror-page') {{-- Adds the class to the body, so we can change the style of the header depending on the current page --}}
@section('header')

  <div class="page-header" style="background-color:#535E70; heigth:250px; padding: 25px;">
      <div style="background:url(../images/runtimerror-image.png) !important; background-size: 100% !important; background-position: center center !important; width:250px; height:250px; margin:auto;"></div>
  </div>



@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3>Runtimerror</h3>
                <p>Funny that you found this page</p>
                <p>It is not actually done yet</p>
                <p>Check back later ;)</p>
                <a href="https://www.runtimerror.com/">Runtimerror</a>
            </div>
        </div>
        <br>
    </div>
@endsection