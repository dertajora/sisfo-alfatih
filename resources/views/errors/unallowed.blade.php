@extends('errors.layout')
@section('content')
    <div class="content-container">
        <div class="head-line secondary-text-color">
          Sorry
        </div>
        <div class="subheader primary-text-color">
          You are not allowed to access this menu<br>
          
        </div>
          <hr>
          <div class="clearfix"></div>
          <div class="context primary-text-color">
            

          </div>
        <div class="buttons-container">
          <a class="border-button" href="{{URL::to('/dashboard')}}">Go To Homepage</a>
          <a class="border-button" onclick="goBack()">Go To Previous Page</a>
        </div>
    </div>
@endsection