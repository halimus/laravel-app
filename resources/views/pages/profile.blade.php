@extends('layout.default')

@section('styles')
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@stop

@section('header')
    @include('includes.header')
@stop


@section('content')
<div id="content">
    
    <h3 id="title">My Profile</h3>
    
    <a href="#" class="showdiv" rel="1">Basic Information</a> | <a href="#" class="showdiv" rel="2">Change Password</a>
    
    <ul class="errors">
        @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>   
    
    <br>
    <div id="div-1" style="">
        <fieldset>
            <legend>Basic Information</legend>
            <form method="POST" action="{{ url('profile') }}">
                
                {!! csrf_field() !!}
                
                <?php 
                 
                   //echo $user->first_name;
                ?>
                
                <br>
                <div class="{!! ($errors->has('first_name')) ? ' has-error' : '' !!}">
                    <label>First name<em>*</em></label>
                    <input name="first_name" id="first_name" value="{{ old('first_name') ? old('first_name'): @$user->first_name }}" type="text" class="form-text">
                    <span class="errors">{!! ($errors->has('first_name') ? $errors->first('first_name') : '') !!}</span>
                </div>

                <br>
                <div class="{!! ($errors->has('last_name')) ? ' has-error' : '' !!}">
                    <label>Last name<em>*</em></label>
                    <input name="last_name" id="last_name" value="{{ old('last_name') ? old('last_name'): @$last_name }}" type="text" class="form-text">
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
                    <input name="email" id="email" value="{{ old('email') ? old('email'): @$email }}" type="text" class="form-text">
                    <span class="errors">{!! ($errors->has('email') ? $errors->first('email') : '') !!}</span>
                </div>
                
                <br>
                <div>
                    <button class="form-button form-button-green" type="submit">Submit</button>
                    <button class="form-button form-button-red" type="reset">Reset</button>
                </div>  
            </form>
        </fieldset>
    </div>
    
    <div id="div-2" style="display: none;">
        <fieldset>
            <legend>Change password</legend>
            <form method="POST" action="{{ url('profile/password') }}">
                
                {!! csrf_field() !!}
                
                <br>
                <div class="{!! ($errors->has('oldpassword')) ? ' has-error' : '' !!}">
                    <label>Old Password<em>*</em></label>
                    <input name="oldpassword" id="oldpassword" value="{{ old('oldpassword') ? old('oldpassword'): @$oldpassword }}" type="password" class="form-text">
                    <span class="errors">{!! ($errors->has('oldpassword') ? $errors->first('oldpassword') : '') !!}</span>
                </div>
                <br>
                <div class="{!! ($errors->has('password')) ? ' has-error' : '' !!}">
                    <label>New Password<em>*</em></label>
                    <input name="password" id="password" value="{{ old('password') ? old('password'): @$password }}" type="password" class="form-text">
                    <span class="errors">{!! ($errors->has('password') ? $errors->first('password') : '') !!}</span>
                </div>

                <br>
                <div class="{!! ($errors->has('password_confirmation')) ? ' has-error' : '' !!}">
                    <label>Confirm Password<em>*</em></label>
                    <input name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') ? old('password_confirmation'): @$password }}" type="password" class="form-text">
                    <span class="errors">{!! ($errors->has('password_confirmation') ? $errors->first('password_confirmation') : '') !!}</span>
                </div>

                <br>
                <div>
                    <button class="form-button form-button-green" type="submit">Submit</button>
                    <button class="form-button form-button-red" type="reset">Reset</button>
                </div>  
            </form>
        </fieldset>
    </div>

</div>
@stop

@section('footer')
    @include('includes.footer')
@stop

@section('javascript')
    <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
@stop
