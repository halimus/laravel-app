@extends('layout.default')

@section('styles')
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@stop

@section('header')
@include('includes.header')
@stop


@section('content')
<div id="content">

    <h3 id="title">Contact US</h3>

        <ul class="errors">
            @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
    
        <div class="success">
            <p>{{@$successMessage}}</p>
        </div>

        <form method="POST" action="{{ url('contact.do') }}">

                {{ csrf_field() }}   
                
                <br>
                <div class="{!! ($errors->has('first_name')) ? ' has-error' : '' !!}">
                    <label>First Name<em>*</em></label>
                    <input name="first_name" id="first_name" value="{{ old('first_name') }}" type="text" class="form-text">  
                    <span class="errors">{!! ($errors->has('first_name') ? $errors->first('first_name') : '') !!}</span>
                </div>
            
                <br>
                <div class="{!! ($errors->has('last_name')) ? ' has-error' : '' !!}">
                    <label>Last Name<em>*</em></label>
                    <input name="last_name" id="last_name" value="{{ old('last_name') }}" type="text" class="form-text">  
                    <span class="errors">{!! ($errors->has('last_name') ? $errors->first('last_name') : '') !!}</span>
                </div>
            
                <br>
                <div class="{!! ($errors->has('email')) ? ' has-error' : '' !!}">
                    <label>Email<em>*</em></label>
                    <input name="email" id="email" value="{{ old('email') }}" type="text" class="form-text">
                    <span class="errors">{!! ($errors->has('email') ? $errors->first('email') : '') !!}</span>
                </div>
            
                <br>
                <div class="{!! ($errors->has('phone')) ? ' has-error' : '' !!}">
                    <label>Phone</label>
                    <input name="phone" id="phone" value="{{ old('phone') }}" type="text" class="form-text">
                    <span class="errors">{!! ($errors->has('phone') ? $errors->first('phone') : '') !!}</span>
                </div>
  
                <br>
                <div class="{!! ($errors->has('subject')) ? ' has-error' : '' !!}">
                    <label>Subject<em>*</em></label>
                    <input name="subject" id="subject" value="{{ old('subject') }}" type="text" class="form-text">
                    <span class="errors">{!! ($errors->has('subject') ? $errors->first('subject') : '') !!}</span>
                </div>

                <br>
                <div class="{!! ($errors->has('message')) ? ' has-error' : '' !!}">
                    <label>Message<em>*</em></label>
                    <textarea name="message" id="message" rows="5" cols="50" class="form-textarea">{{ old('message') }}</textarea>
                    <span class="errors">{!! ($errors->has('message') ? $errors->first('message') : '') !!}</span>
                </div>

                <br><br>
                <div>
                    <button class="form-button form-button-green" type="submit">Submit</button>
                    <button class="form-button form-button-red" type="reset">Reset</button>
                </div>     
            
        </form>

</div>
@stop

@section('footer')
@include('includes.footer')
@stop
