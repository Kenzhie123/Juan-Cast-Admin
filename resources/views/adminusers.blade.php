@extends('templates.navigation')

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/adminusers.css')}}">
@endsection

@section("page_title")
    <div id="page_title_container">
        <h1>Admin Users</h1>
    </div>
@endsection

@section('main_content')
    
    <div id="users_table_container" class="bordered_container">
        <div id="table_top_container">
            <div id="search_container">
                <input type="text" class="default_input" placeholder="Enter search key" id="search_field"/>
                <select name="" id="search_field_select" class="default_input">
                    <option value="0">User ID</option>
                    <option value="1">Full Name</option>
                    <option value="2">Email</option>
                    <option value="3">Username</option>
                    <option value="4">Mobile Number</option>
                </select>
                <button class="default_button">Add + </button>
            </div>
           
        </div>
        <table id="users_table" class="default_table">
            <thead>
                <th>User ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>User Type</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->full_name}}</td>
                        <td>{{$user->user_type == 1 ? "Admin" : ($user->user_type == 2 ? "Developer" : "Viewer")}}</td>
                        <td>
                            <button class="default_button"><img src="{{asset('icons/edit_icon.svg')}}"></button>
                            <button class="danger_button"><img src="{{asset('icons/delete_icon.svg')}}"></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    

@endsection