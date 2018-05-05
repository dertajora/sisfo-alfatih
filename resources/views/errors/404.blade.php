@extends('errors.layout')
@section('content')
    <div class="content-container">
        <div class="head-line secondary-text-color">
          Ooops!
        </div>
        <div class="subheader primary-text-color">
          The page you are looking for does not exist <br>
          
        </div>
          <hr>
          <div class="clearfix"></div>
          <div class="context primary-text-color">


          </div>
        <div class="buttons-container">
          <a class="border-button" href="{{URL::to('/')}}">Go To Homepage</a>
          <a class="border-button" onclick="goBack()">Go To Previous Page</a>
        </div>
    </div>
@endsection