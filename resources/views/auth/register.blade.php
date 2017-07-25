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

    <form method="POST" action="{{ url('register.html') }}">
        {!! csrf_field() !!}
    
        <div class="registerbox">
            
        <ul class="errors">
            @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>   
            
        <!--{{$first_name}}-->    

        <h2>Register form</h2>
        
        <div class="{!! ($errors->has('first_name')) ? ' has-error' : '' !!}">
            <label>First name<em>*</em></label>
            <input name="first_name" id="first_name" value="{{ old('first_name') ? old('first_name'):$first_name }}" type="text" class="form-text">
            <span class="errors">{!! ($errors->has('first_name') ? $errors->first('first_name') : '') !!}</span>
        </div>

        <br>
        <div class="{!! ($errors->has('last_name')) ? ' has-error' : '' !!}">
            <label>Last name<em>*</em></label>
            <input name="last_name" id="last_name" value="{{ old('last_name') ? old('last_name'):$last_name }}" type="text" class="form-text">
            <span class="errors">{!! ($errors->has('last_name') ? $errors->first('last_name') : '') !!}</span>
        </div>
        
        <br>
        <div class="{!! ($errors->has('gender')) ? ' has-error' : '' !!}">
            <label>Gender<em>*</em></label>
            
            <select id="gender" name="gender" class="form-text">
                <option value=""></option>
                <option value="M" {{ (old("gender") == 'M' ? "selected":"") }}>Male</option>
                <option value="F" {{ (old("gender") == 'F' ? "selected":"") }}>Female</option>
            </select>


            <span class="errors">{!! ($errors->has('gender') ? $errors->first('gender') : '') !!}</span>
        </div>
        
        <br>
        <div class="{!! ($errors->has('phone')) ? ' has-error' : '' !!}">
            <label>Phone<em></em></label>
            <input name="phone" id="phone" value="{{ old('phone') }}" type="text" class="form-text">
            <span class="errors">{!! ($errors->has('phone') ? $errors->first('phone') : '') !!}</span>
        </div>
        
        <br>
        <div class="{!! ($errors->has('email')) ? ' has-error' : '' !!}">
            <label>Email<em>*</em></label>
            <input name="email" id="email" value="{{ old('email') ? old('email'):$email }}" type="text" class="form-text">
            <span class="errors">{!! ($errors->has('email') ? $errors->first('email') : '') !!}</span>
        </div>
        
        <br>
        <div class="{!! ($errors->has('password')) ? ' has-error' : '' !!}">
            <label>Password<em>*</em></label>
            <input name="password" id="password" value="{{ old('password') ? old('password'):$password }}" type="password" class="form-text">
            <span class="errors">{!! ($errors->has('password') ? $errors->first('password') : '') !!}</span>
        </div>
        
        <br>
        <div class="{!! ($errors->has('password_confirmation')) ? ' has-error' : '' !!}">
            <label>Confirm Password<em>*</em></label>
            <input name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') ? old('password_confirmation'): $password }}" type="password" class="form-text">
            <span class="errors">{!! ($errors->has('password_confirmation') ? $errors->first('password_confirmation') : '') !!}</span>
        </div>

        <br>
        <div>
            <button class="form-button form-button-green" type="submit">Submit</button>
            <button class="form-button form-button-red" type="reset">Reset</button>
        </div>  
        
        <p><a href="{{ url('login.html') }}">Back to Login</a></p>
        
    </div>
    
    </form>

</div>
@stop

@section('footer')
@include('includes.footer')
@stop