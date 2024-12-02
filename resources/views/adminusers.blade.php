@extends('templates.navigation')

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/adminusers.css')}}">
@endsection

@section('main_content')
    
    <div id="users_table_container" class="bordered_container">
        <div id="top_container">
            <h2>Admin Users</h2>
            <button class="default_button">Add + </button>
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