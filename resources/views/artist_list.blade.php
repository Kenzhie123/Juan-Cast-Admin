@extends('templates/navigation')

@php
    include_once app_path('Helpers/Tools.php');
@endphp

@section('page_title')
    <div id="page_title_container">
        <h1>Artist List</h1>
    </div>
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/artist_list.css')}}">
@endsection

@section('main_content')
    <div id="artist_list_container" class="bordered_container">
        <div id="table_top_container">
            <div id="search_container">
                <div class="labeled_container_row w_100">
                    <label for=""></label>
                    <input type="text" class="default_input" placeholder="Enter a search key">
                </div>
                
                <div class="labeled_container_row">
                    <label for="">Search By</label>
                    <select name="" id="" class="default_input">
                        <option value="">Artist Name</option>
                        <option value="">Group</option>
                    </select>
                </div>
                <div class="labeled_container_row">
                    <label for="">Order By</label>
                    <select name="" id="" class="default_input">
                        <option value="">Alphabetical</option>
                    </select>
                </div>
                <div class="labeled_container_row">
                    <label for=""></label>
                    <button class="default_button" id="add_button">Add +</button>
                </div>
            </div>
        </div>
        <table class="default_table" id="artist_list_table">
            
            <thead>
                <th>Artist</th>
                <th>Tags</th>
                <th></th>
            </thead>
            <tbody>

                @foreach($artists as $artist)
                <tr>
                    <td>{{$artist['artist_name']}}</td>
                    <td>Boy, Group</td>
                    <td>
                        <button class="default_button" onclick="window.location.replace('{{route('edit_artist',['artist_id'=>$artist['artist_id']])}}')"><img src="{{asset('icons/edit_icon.svg')}}"></button>
                        <button class="danger_button"><img src="{{asset('icons/delete_icon.svg')}}"></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection