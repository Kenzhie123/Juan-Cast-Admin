<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @yield('custom_style')
</head>

<body>
    <div id="left_container">
        <a href="homepage"><img src="{{asset('images/juancast_logo_transparent.png')}}"> <h3>Juancast Admin</h3></a>
        <nav id="navigation">
            <ul>
                
                <li class="{{ $currentPage == 'dashboard' ? 'navigation_selected' : ''  }}">
                    <a href="dashboard">
                        <img src="{{asset('icons/dashboard_icon.svg')}}">
                        Dashboard
                    </a>
                </li>
                <h4>Management</h4>
                <li class="{{ $currentPage == 'adminusers' ? 'navigation_selected' : ''  }}">
                    <a href="adminusers">
                        <img src="{{asset('icons/admin_user_icon.svg')}}">
                        Admin Users
                    </a>
                </li>
                <li class="{{ $currentPage == 'usermanagement' ? 'navigation_selected' : ''  }}">
                    <a href="usermanagement">
                        <img src="{{asset('icons/profile_icon.svg')}}">
                        Users
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/artist_icon.svg')}}">
                        Artists
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/polls_icon.svg')}}">
                        Polls
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/transactions_icon.svg')}}">
                        Transactions
                    </a>
                </li>
                <h4>App Configuration</h4>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/announcement_icon.svg')}}">
                        Announcements
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/promo_codes_icon.svg')}}">
                        Promo Codes
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/ad_rewards_icon.svg')}}">
                        Ad Rewards
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/spin_rewards_icon.svg')}}">
                        Spin Rewards
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/star_config_icon.svg')}}">
                        Star Config
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/banners_icon.svg')}}">
                        Banners
                    </a>
                </li>
                <h4>Analytics</h4>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/user_analytics_icon.svg')}}">
                        Users
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/engagement_icon.svg')}}">
                        Engagement
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/community_icon.svg')}}">
                        Community
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/insight_icon.svg')}}">
                        Insight
                    </a>
                </li>
                <li>
                    <a href="adminusers">
                        <img src="{{asset('icons/revenue_icon.svg')}}">
                        Revenue
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div id="main_content">
        @yield('main_content')
    </div>

</body>

</html>
