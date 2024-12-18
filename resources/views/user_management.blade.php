@extends('templates.navigation')


@section('custom_style')
<link rel="stylesheet" href="{{asset('css/user_management.css')}}">
@endsection

@section('page_title')
    <div id="page_title_container">
        <h1>Users Management</h1>
    </div>
@endsection

@section('main_content')

<div id="users_container" class="bordered_container">
    
    <table class="default_table">
        <div id="table_top_container">
            <div id="search_container">
                <div class="labeled_container_row w_100">
                    <label for="">User Count: {{count($users)}}</label>
                    <input type="text" class="default_input" placeholder="Enter search key" id="search_field"/>
                </div>
                <div class="labeled_container_row">
                    <label for="">Search By</label>
                    <select name="" id="search_field_select" class="default_input">
                        <option value="0">User ID</option>
                        <option value="1">Full Name</option>
                        <option value="2">Email</option>
                        <option value="3">Username</option>
                        <option value="4">Mobile Number</option>
                    </select>
                </div>
                <div class="labeled_container_row">
                    <label for="">Order By</label>
                    <select name="" id="order_by_select" class="default_input">
                        <option selected>Stars</option>
                        <option>Suns</option>
                        <option>Name</option>
                        <option>Email</option>
                        <option>Username</option>
                    </select>
                </div>
                
            </div>
        </div>
        <thead>
            <th>User ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Mobile Number</th>
            <th>Stars</th>
            <th>Suns</th>
        </thead>
        <tbody id="user_list_tbody">
            @if(isset($users))
            
                @foreach ($users as $user)
                <tr class="user_tr" onclick="window.location.replace('{{route('userinformation.index',['userid'=>$user['userID']])}}')">
                    <td>{{$user['userID']}}</td>
                    <td>{{isset($user['fullName'])? $user['fullName'] : ''}}</td>
                    <td>{{isset($user['email']) ? $user['email'] : ''}}</td>
                    <td>{{isset($user['username']) ? $user['username'] : ''}}</td>
                    <td>{{isset($user['number']) ? $user['number'] : ''}}</td>
                    <td>{{isset($user['votingPoints']) ? number_format($user['votingPoints']) : 0}}</td>
                    <td>{{isset($user['sunvotingpoints']) ? number_format($user['sunvotingpoints']) : ''}}</td>
                </tr>
                @endforeach
            
            @endif
        </tbody>
    </table>
</div>

<script src="{{asset('js/user_management.js')}}"></script>
@endsection