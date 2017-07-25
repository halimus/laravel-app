@extends('layout.default')

@section('styles')
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
@stop

@section('header')
@include('includes.header')
@stop


@section('content')
<div id="content">

    <h3 id="title">About US</h3>

    <p>
        Laravel is a web application framework with expressive, elegant syntax. We believe 
        development must be an enjoyable, creative experience to be truly fulfilling. Laravel 
        attempts to take the pain out of development by easing common tasks used in the majority 
        of web projects, such as authentication, routing, sessions, queueing, and caching.
        <br><br>
        Laravel is accessible, yet powerful, providing tools needed for large, robust applications. 
        A superb inversion of control container, expressive migration system, and tightly integrated unit 
        testing support give you the tools you need to build any application with which you 
        are tasked.
    </p> 

    
</div>
@stop

@section('footer')
@include('includes.footer')
@stop
