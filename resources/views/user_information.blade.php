@extends('templates/navigation')

@php
    include_once app_path('Helpers/Tools.php');
@endphp

@section('page_title')
    <div id="page_title_container">
        <h1>User Information</h1>
    </div>
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/user_information.css')}}">
@endsection

@section('main_content')

    <div id="user_information_container" class="bordered_container">
        <div id="left_profile_container">
            <div id="profile_container" >
                <div id="profile_image"  style="background-image: url({{($userData['profile_image'] != null 
                ? $userData['profile_image'] 
                : ($userData['gender'] == 'male' ? asset('images/profile_male.png') : asset('images/profile_female.png')))}})">
                    
                </div>
            </div>
            <div class="profile_currency_container">
                <div class="currency_container">
                    <img src="{{asset('icons/star.svg')}}" alt="">
                    <p>{{number_format($userData['votingPoints'])}}</p>
                </div>
                <div class="currency_container">
                    <img src="{{asset('icons/sun.svg')}}" alt="">
                    <p>{{number_format($userData['sunvotingpoints'])}}</p>
                </div>
            </div>
           
        </div>
        <div id="right_profile_container">
            <div class="labeled_form_input">
                <label>Name: </label>
                <p>{{$userData['fullName']}}</p>
            </div>
            <div class="labeled_form_input">
                <label>Username: </label>
                <p>{{$userData['username']}}</p>
            </div>
            <div class="labeled_form_input">
                <label>Email: </label>
                <p>{{$userData['email']}}</p>
            </div>
            <div class="labeled_form_input">
                <label>Birthdate: </label>
                <p>{{$userData['birthdate']}}</p>
            </div>
            <div class="labeled_form_input">
                <label>Gender: </label>
                <p>{{$userData['gender']}}</p>
            </div>
            <div class="labeled_form_input">
                <label>Signup Date: </label>
                <p>{{$userData['signUpDate']}}</p>
            </div>
            <div class="labeled_hr labled_hr_primary">
                <div class="custom_hr"></div>
                <h4 class="text_primary">Account Information</h4>
                <div class="custom_hr"></div>
            </div>
            <div class="labeled_form_input">
                <label>Spins Left: </label>
                <p>{{isset($userData['remaining_spins']) ? $userData['remaining_spins'] : 'Not Spinned Yet'}}</p>
            </div>
            <div class="labeled_form_input">
                <label>Last Spin: </label>
                <p>{{$userData['last_spin_date'] != null ? $userData['last_spin_date'] : "Not Spinned Yet"}}</p>
            </div>
            <div class="labeled_form_input">
                <label>Last Claim: </label>
                <p>{{$userData['last_claim_date'] != null ? $userData['last_claim_date'] : "Not Claimed Yet"}}</p>
            </div>
            <div class="labeled_hr labled_hr_primary">
                <div class="custom_hr"></div>
                <h4 class="text_primary">Powerup Information</h4>
                <div class="custom_hr"></div>
            </div>
            <div class="labeled_form_input">
                <label>Active: </label>
                <p>{{$userData['active_powerup'] != null ? productIDToProductName($userData['active_powerup']) : "None"}}</p>
            </div>
            <div class="labeled_form_input">
                <label>Timeout: </label>
                <p>{{$userData['powerup_timeout']!= null ? number_format($userData['powerup_timeout']).' mins' : "None"}}</p>
            </div>
        </div>
        <div id="bottom_container">
            <div class="labeled_hr labled_hr_primary">
                <div class="custom_hr"></div>
                <h4 class="text_primary">Other Information</h4>
                <div class="custom_hr"></div>
            </div> 
            <div class="labeled_form_input">
                <label>Used Promo Codes: </label>
                <ul class="default_input" id="used_promo_codes">
                    @foreach ($userData['usedPromoCodes'] as $promoCode)
                        <li>{{$promoCode}}</li>
                    
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
@endsection