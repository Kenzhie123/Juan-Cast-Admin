@extends('templates.navigation')


@section('custom_style')
<link rel="stylesheet" href="{{asset('css/user_management.css')}}">
@endsection


@section('main_content')
<div id="search_container">
    <h3>Search</h3>
    <input type="text" class="default_input" placeholder="Enter search key" id="search_field"/>
    <select name="" id="search_field_select" class="default_input">
        <option value="0">User ID</option>
        <option value="1">Full Name</option>
        <option value="2">Email</option>
        <option value="3">Username</option>
        <option value="4">Mobile Number</option>
    </select>
</div>
<div id="users_container" class="bordered_container">
    
    <table class="default_table">
        <div id="top_container">
            <h2>Users</h2>
        </div>
        <thead>
            <th>User ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Mobile Number</th>
            <th>Stars</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="user_tr">
                    <td>{{$user['userID']}}</td>
                    <td>{{isset($user['fullName'])? $user['fullName'] : ''}}</td>
                    <td>{{isset($user['email']) ? $user['email'] : ''}}</td>
                    <td>{{isset($user['username']) ? $user['username'] : ''}}</td>
                    <td>{{isset($user['number']) ? $user['number'] : ''}}</td>
                    <td>{{isset($user['votingPoints']) ? $user['votingPoints'] : ''}}</td>
                    <td><button class="transparent_button"><img src="{{asset('icons/view_icon.svg')}}"></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="{{asset('js/user_management.js')}}"></script>
@endsection