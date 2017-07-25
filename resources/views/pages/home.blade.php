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

    <h3 id="title">Welcome to Laravel Lab</h3>

    <ol>
        
        <li><a href="<?php echo url('dashboard', $secure = null); ?>">Dashboard (Secure page)</a></li>
        
        <br>
        <li><a href="{{ url('product/add') }}">New Product (Secure page)</a></li>
        <li><a href="{{ url('product/list') }}">Product List (Secure page)</a></li>
        <li><a href="{{ url('product/list') }}">Product List with Datatables (Secure page)</a></li>
        
        <br>
        <li><a href="{{ url('login') }}">Login page</a></li>
        <li><a href="<?php echo url('login.html', $secure = null); ?>">Login page (.html)</a></li>
        <li><a href="<?php echo secure_url('login', $parameters = []); ?>">Login page with https</a></li>
        <li><a href="<?php echo url('register.html', $secure = null); ?>">Register page</a></li>
        
        
        <br>
        <li><a href="<?php echo url('param', ['id' => 1]); ?>">Required Parameters 1</a></li>
        <li><a href="{{ url('posts/3/comments/18') }}">Required Parameters 2</a></li>
        <li><a href="{{ url('user/halim') }}">Optional Parameters</a></li>
        
        
        
        <br>
        <li><a href="{{ url('data') }}">Pass data from Controller to view</a></li>
        
        <br>
        <li><a href="{{ url('version') }}">Laravel version</a></li>
        
        
        <br>
        <li><a href="{{ url('custom404') }}">Custom 404 Page (Not found page)</a></li>
        <li><a href="{{ url('custom403') }}">Custom 403 Page (Unauthorized page)</a></li>
        
    </ol> 

    
</div>
@stop

@section('footer')
@include('includes.footer')
@stop
