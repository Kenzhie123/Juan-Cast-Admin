@extends('templates/navigation')

@php
    include_once app_path('Helpers/Tools.php');
@endphp

@section('page_title')
    <div id="page_title_container">
        <h1>PAGE TITLE</h1>
    </div>
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/custom_style.css')}}">
@endsection

@section('main_content')

@endsection