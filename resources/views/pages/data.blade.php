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

    <h3 id="title">{{@$title}}</h3>

    <p><strong>{{@$message}}</strong></p>

    <p>Some PHP Frameworks :</p>
    
    <ul class="list-group">
        @foreach($frameworks as $framework)
        <li class="list-group-item">
            {{$framework}}
            @if($framework =='Laravel')
                <p style="color:red">The framework for artisan</p>
            @else
                <p style="color:blue">Other descreption</p>
            @endif
        </li>
        @endforeach
    </ul>

    
</div>
@stop

@section('footer')
@include('includes.footer')
@stop
