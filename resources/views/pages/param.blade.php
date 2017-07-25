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

    <h3 id="title">Param page</h3>

    <p>The parameter of page = {{@$id}}</p>

    
</div>
@stop

@section('footer')
@include('includes.footer')
@stop
