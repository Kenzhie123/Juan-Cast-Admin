@extends('templates/navigation')

@php
    include_once app_path('Helpers/Tools.php');
@endphp

@section('page_title')
    <div id="page_title_container">
        <h1>Add Poll</h1>
    </div>
@endsection

@section('custom_style')
<link rel="stylesheet" href="{{asset('css/add_poll.css')}}">
@endsection

@section('main_content')
    <div id="poll_info_container" class="bordered_container">
        <div id="poll_banner_image" style="background-image:url({{asset('images/placeholder.png')}})">
            <div id="poll_banner_image_overlay">
                <img src="{{asset('icons/edit_icon.svg')}}" >
            </div>
        </div> 

        <div id="poll_details_container">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="banner_image" id="banner_image_input" class="hidden" accept="images/*"/>
                <div class="labeled_form_input">
                    <label>Poll Title</label>
                    <input type="text" class="default_input" name="poll_title" required>
                </div>
                <div class="labeled_form_input">
                    <label>Category</label>
                    <input type="text" class="default_input" name="category" required>
                </div>
                <div class="labeled_form_input">
                    <label>Date From</label>
                    <input type="date" class="default_input" name="date_from" required>
                </div>
                <div class="labeled_form_input">
                    <label>Date to</label>
                    <input type="date" class="default_input" name="date_to" required>
                </div>
                <div class="labeled_form_input">
                    <label>Time End</label>
                    <input type="time" class="default_input" name="time_end" required>
                </div>
                <div class="labeled_form_input">
                    <label>Poll Type</label>
                    <select name="poll_type" id="poll_type_select" class="default_input" required>
                        <option value="Minor" >Minor</option>
                        <option value="Major">Major</option>
                    </select>
                </div>
                <div class="labeled_form_input"> 
                    <label>Note</label>
                    <textarea name="note" id=""rows="10" class="default_input" required></textarea>
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
                            <input type="radio" name="password_enabled" id="password_enabled_false" checked>
                        </div>
                        <div class="labeled_form_input radio_true_false_container">
                            <label for="password_enabled_true">True</label>
                            <input type="radio" name="password_enabled" id="password_enabled_true">
                        </div>
                    </div>
                </div>
                <div class="labeled_form_input hidden" id="password_container">
                    <label>Password</label>
                    <input type="text" class="default_input" name="password">
                </div>
                <div class="labeled_form_input hidden" id="limit_votes_container">
                    <label>Sun Vote Limited</label>
                    <div class="container_col_2 m_auto" style="width:fit-content">
                        <div class="labeled_form_input radio_true_false_container" >
                            <label for="limit_suns_false">False</label>
                            <input type="radio" name="limit_suns" id="limit_suns_false" checked>
                        </div>
                        <div class="labeled_form_input radio_true_false_container">
                            <label for="limit_suns_true">True</label>
                            <input type="radio" name="limit_suns" id="limit_suns_true" >
                        </div>
                    </div>
                </div>
                <div class="labeled_form_input">
                    <label>Visibility</label>
                    <select name="visibility" class="default_input">
                        <option value="Visible" >Visible</option>
                        <option value="Hidden" >Hidden</option>
                    </select>
                </div>

                <button class="default_button" id="add_button">Add</button>
            </form>
        </div>
    </div>
@endsection


@section('custom_scripts')
    <script src="{{asset('js/add_poll.js')}}"></script>
@endsection