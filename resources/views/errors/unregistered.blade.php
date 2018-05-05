@extends('errors.layout')
@section('content')
    <div class="content-container">
        <div class="head-line secondary-text-color">
          Ooops!
        </div>
        <div class="subheader primary-text-color">
          Your email are not registered yet in Cyberindo CRM <br>
          
        </div>
          <hr>
          <div class="clearfix"></div>
          <div class="context primary-text-color">
            
          <p>
            Please contact Product Team.
          </p>


          </div>
        <div class="buttons-container">
          <a class="border-button" href="{{URL::to('logout')}}">Logout</a>
        </div>
    </div>
@endsection