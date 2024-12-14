@extends('templates/navigation')

@php
    include_once app_path('Helpers/Tools.php');
@endphp

@section('page_title')
    <div id="page_title_container">
        <h1>Edit Artist</h1>
    </div>
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/edit_artist.css')}}">
@endsection

@section('main_content')
    <div id="edit_artist_container" class="bordered_container">
        <div id="artist_profile_container" style="background-image:url('{{$artistInfo['artist_profile']}}')">
            <div id="artist_profile_image_overlay">
                <img src="{{asset('icons/edit_icon.svg')}}" >
            </div>
        </div>
        <div id="artist_details_container">
            <form action="">
                <div class="labeled_form_input">
                    <label>Artist Name</label>
                    <input type="text" class="default_input" value="{{$artistInfo['artist_name']}}">
                </div>
                <div class="labeled_form_input">
                    <label>Tags</label>
                    <input type="text" class="default_input" value="">
                </div>
                <div class="labeled_form_input">
                    <label>Group</label>
                    <input type="text" class="default_input" value="None" disabled>
                </div>
                <button class="default_button" id="update_button">Update</button>
            </form>
        </div>
    </div>
@endsection