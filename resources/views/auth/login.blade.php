@extends('layout.default')

@section('styles')
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@stop

@section('header')
@include('includes.header')
@stop


@section('content')
<div id="content">
    
    
    @if($errors->has())
        @foreach ($errors->all() as $error)
           <div class="error_box">{{ $error }}</div>
        @endforeach
    @endif
    
    
  <form method="POST" action="{{ url('login.html') }}">
    {!! csrf_field() !!}
      
    <div class="logibox">

        <h2>Login Box</h2>
        <div class="">
            <label>Email<em>*</em></label>
            <input name="email" id="email" value="{{ old('email') }}" type="text" class="form-text">
        </div>
        
        <br>
        <div class="">
            <label>Password<em>*</em></label>
            <input name="password" id="password" value="{{ old('password') }}" type="password" class="form-text">
        </div>

        <br>
        <div>
            <button class="form-button form-button-green" type="submit">Login</button>
        </div>  

        <p><a href="{{ url('forgot_password') }}">Forgot password</a></p>
        <p>Don't have an account! <a href="{{ url('register.html') }}">Sign Up Here</a></p>
        
    </div>
  </form>
    
</div>
@stop

@section('footer')
@include('includes.footer')
@stop