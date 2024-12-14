@extends('templates.navigation')

@php
    include_once app_path('Helpers/Tools.php');
@endphp

@section('page_title')
<div id="page_title_container">
    <h1>Polls</h1>
</div>
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/poll_list.css')}}">
@endsection

@section('main_content')

    <div id="search_container">
        <div class="labeled_container_row w_100">
            <label for=""></label>
            <input type="text" class="default_input" placeholder="Enter a search key">
        </div>
        
        <div class="labeled_container_row">
            <label for="">Search By</label>
            <select name="" id="" class="default_input">
                <option value="">Artist Name</option>
                <option value="">Poll Name</option>
            </select>
        </div>
        <div class="labeled_container_row">
            <label for="">Order By</label>
            <select name="" id="" class="default_input">
                <option value="">Date End</option>
                <option value="">Date Start</option>
                <option value="">Alphabetical</option>
            </select>
        </div>
        <div class="labeled_container_row">
            <label for="">Filter By</label>
            <select name="" id="" class="default_input">
                <option value="">Visible</option>
                <option value="">All</option>
                <option value="">Started</option>
            </select>
        </div>
        <div class="labeled_container_row">
            <label for=""></label>
            <button class="default_button" id="addButton">Add</button>
        </div>
    </div>

    {{-- <div id="poll_list_container">
        <a href="" class="poll_list_item">
            <div class="pli_banner_image_container" style="background-image: url('https://firebasestorage.googleapis.com/v0/b/vote-71958.appspot.com/o/voting_poll_banners%2F5kVJvRKFT6Gcfw56wraG?alt=media&amp;token=e5604a17-d9e7-4b8a-82a3-80dff56cf7a2')">

            </div>

            <div class="pli_description_container">
                <h3>EVERYJUANS ULTIMATE P-POP CHOICE</h3>
                <p>November 25, 2024 - December 1, 2024</p>
                <div class="pli_category_container">
                    <img src="http://127.0.0.1:8000/images/category_logo.svg">
                    <p>10 P-POP</p>
                    <img src="http://127.0.0.1:8000/images/star.svg">
                    <p>Minor</p>
                </div>
            </div>
        </a>
        <a href="" class="poll_list_item">
            <div class="pli_banner_image_container" style="background-image: url('https://firebasestorage.googleapis.com/v0/b/vote-71958.appspot.com/o/voting_poll_banners%2F6LvZNMoZc35jqxeeWkwb?alt=media&amp;token=44bad32f-072f-44c9-9d93-836bb9dbe3ad')">

            </div>

            <div class="pli_description_container">
                <h3>EVERYJUANS ULTIMATE P-POP CHOICE</h3>
                <p>November 25, 2024 - December 1, 2024</p>
                <div class="pli_category_container">
                    <img src="http://127.0.0.1:8000/images/category_logo.svg">
                    <p>10 P-POP</p>
                    <img src="http://127.0.0.1:8000/images/star.svg">
                    <p>Minor</p>
                </div>
            </div>
        </a>
        <a href="" class="poll_list_item">
            <div class="pli_banner_image_container" style="background-image: url('https://firebasestorage.googleapis.com/v0/b/vote-71958.appspot.com/o/voting_poll_banners%2FDbRxpCWhiQIxVMkD5AhQ?alt=media&amp;token=fad6c48d-3b53-473a-837b-b47481f277fe')">

            </div>

            <div class="pli_description_container">
                <h3>EVERYJUANS ULTIMATE P-POP CHOICE</h3>
                <p>November 25, 2024 - December 1, 2024</p>
                <div class="pli_category_container">
                    <img src="http://127.0.0.1:8000/images/category_logo.svg">
                    <p>10 P-POP</p>
                    <img src="http://127.0.0.1:8000/images/star.svg">
                    <p>Minor</p>
                </div>
            </div>
        </a>
        <a href="" class="poll_list_item">
            <div class="pli_banner_image_container" style="background-image: url('https://firebasestorage.googleapis.com/v0/b/vote-71958.appspot.com/o/voting_poll_banners%2FDoYplEO9ALBeuANlf0Tk?alt=media&amp;token=7668a85f-dad8-4e57-b592-efa5fc028f65')">

            </div>

            <div class="pli_description_container">
                <h3>EVERYJUANS ULTIMATE P-POP CHOICE</h3>
                <p>November 25, 2024 - December 1, 2024</p>
                <div class="pli_category_container">
                    <img src="http://127.0.0.1:8000/images/category_logo.svg">
                    <p>10 P-POP</p>
                    <img src="http://127.0.0.1:8000/images/star.svg">
                    <p>Minor</p>
                </div>
            </div>
        </a>

    </div> --}}
    <div id="poll_list_container">
        @foreach ($pollList as $poll)
            <a href="{{route('edit_poll',['pollID'=>$poll['pollID']])}}" class="poll_list_item">
                <div class="pli_banner_image_container" style="background-image: url('{{$poll['pollBanner']}}')">

                </div>

                <div class="pli_description_container">
                    <h3>{{$poll['poll_title']}}</h3>
                    <p>{{formatDateString($poll['date_from'])}} - {{formatDateString($poll['date_to'])}}</p>
                    <div class="pli_category_container">
                        <img src="{{asset('images/category_logo.svg')}}">
                        <p>10 P-POP</p>
                        <img src="{{asset('images/star.svg')}}">
                        <p>Minor</p>
                    </div>
                </div>
            </a>
        @endforeach

    </div>
@endsection