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

    <div class="passbox">

        <h2>Reset password</h2>
        <div class="{!! ($errors->has('email')) ? ' has-error' : '' !!}">
            <label>Email<em>*</em></label>
            <input name="email" id="email" value="{{ old('email') }}" type="text" class="form-text">
            <span class="errors">{!! ($errors->has('email') ? $errors->first('email') : '') !!}</span>
        </div>

        <br>
        <div>
            <button class="form-button form-button-green" type="submit">Send</button>
        </div>  

        <p><a href="{{ url('login.html') }}">Back to Login</a></p>
        <p>Don't have an account! <a href="{{ url('register.html') }}">Sign Up Here</a></p>
        
    </div>

</div>
@stop

@section('footer')
@include('includes.footer')
@stop