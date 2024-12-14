@extends('templates/navigation')

@php
    include_once app_path('Helpers/Tools.php');
@endphp

@section('page_title')
    <div id="page_title_container">
        <h1>Edit Poll</h1>
    </div>
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/edit_poll.css')}}">
@endsection

@section('main_content')
    <div id="poll_info_container" class="bordered_container">
        <div id="poll_banner_image" style="background-image:url({{$pollInfo['poll_banner']}})">
            <div id="poll_banner_image_overlay">
                <img src="{{asset('icons/edit_icon.svg')}}" >
            </div>
        </div> 

        <div id="poll_details_container">
            <form action="">
                <div class="labeled_form_input">
                    <label>Poll Title</label>
                    <input type="text" class="default_input" value="{{$pollInfo['poll_title']}}">
                </div>
                <div class="labeled_form_input">
                    <label>Category</label>
                    <input type="text" class="default_input" value="{{$pollInfo['category']}}">
                </div>
                <div class="labeled_form_input">
                    <label>Date From</label>
                    <input type="date" class="default_input" value="{{convertDateStringToInputDateString($pollInfo['date_from'])}}">
                </div>
                <div class="labeled_form_input">
                    <label>Date to</label>
                    <input type="date" class="default_input" value="{{convertDateStringToInputDateString($pollInfo['date_to'])}}">
                </div>
                <div class="labeled_form_input">
                    <label>Time End</label>
                    <input type="time" class="default_input" value="{{$pollInfo['time_end_formatted']}}">
                </div>
                <div class="labeled_form_input">
                    <label>Poll Type</label>
                    <select name="" id="poll_type_select" class="default_input">
                        <option value="minor" {{$pollInfo['poll_type'] == "Minor" ? "selected" : ""}} >Minor</option>
                        <option value="major" {{$pollInfo['poll_type'] == "Major" ? "selected" : ""}}>Major</option>
                    </select>
                </div>
                <div class="labeled_form_input"> 
                    <label>Note</label>
                    <textarea name="" id=""rows="10" class="default_input" value="{{$pollInfo['note']}}">{{$pollInfo['note']}}</textarea>
                </div>
                <div class="labeled_hr labled_hr_primary">
                    <div class="custom_hr"></div>
                    <h4 class="text_primary">Settings</h4>
                    <div class="custom_hr"></div>
                </div>
                <div class="labeled_form_input">
                    <label>Password Enabled</label>
                    <div class="container_col_2 m_auto" style="width:fit-content">
                        <div class="labeled_form_input radio_true_false_container" >
                            <label for="password_enabled_false">False</label>
                            <input type="radio" name="password_enabled" id="password_enabled_false" {{$pollInfo['PasswordEnabled']?'':'checked'}}>
                        </div>
                        <div class="labeled_form_input radio_true_false_container">
                            <label for="password_enabled_true">True</label>
                            <input type="radio" name="password_enabled" id="password_enabled_true" {{$pollInfo['PasswordEnabled']?'checked':''}}>
                        </div>
                    </div>
                </div>
                <div class="labeled_form_input hidden" id="password_container">
                    <label>Password</label>
                    <input type="text" class="default_input">
                </div>
                <div class="labeled_form_input hidden" id="limit_votes_container">
                    <label>Sun Vote Limited</label>
                    <div class="container_col_2 m_auto" style="width:fit-content">
                        <div class="labeled_form_input radio_true_false_container" >
                            <label for="limit_suns_false">False</label>
                            <input type="radio" name="limit_suns" id="limit_suns_false" {{$pollInfo['LimitVoteEnabled']?'':'checked'}}>
                        </div>
                        <div class="labeled_form_input radio_true_false_container">
                            <label for="limit_suns_true">True</label>
                            <input type="radio" name="limit_suns" id="limit_suns_true" {{$pollInfo['LimitVoteEnabled']?'checked':''}}>
                        </div>
                    </div>
                </div>
                <div class="labeled_form_input">
                    <label>Visibility</label>
                    <select name="" id="poll_type_select" class="default_input">
                        <option value="minor" {{$pollInfo['visibility'] == "visible" ? "selected" : ""}} >Visible</option>
                        <option value="major" {{$pollInfo['visibility'] == "hidden" ? "selected" : ""}}>Hidden</option>
                    </select>
                </div>

                <button class="default_button" id="update_button">Update</button>
            </form>
        </div>
    </div>
@endsection


@section('custom_scripts')
<script src="{{asset('js/edit_poll.js')}}"></script>
@endsection