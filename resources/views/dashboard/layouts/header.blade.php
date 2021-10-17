<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ env('APP_NAME') }}</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="favicon.ico" type="image/x-icon" />

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/icon-kit/dist/css/iconkit.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/ionicons/dist/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"> --}}
{{-- <link rel="stylesheet" href="{{ asset('template/plugins/jvectormap/jquery-jvectormap.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('template/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('template/plugins/weather-icons/css/weather-icons.min.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('template/plugins/c3/c3.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/dist/css/theme.min.css') }}">
@stack('css')
<script src="{{asset('template/src/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>


<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="wrapper">
<header class="header-top" header-theme="light">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="top-menu d-flex align-items-center">
                <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                <div class="header-search">
                    <div class="input-group">
                        <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                    </div>
                </div>
                <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
            </div>
            <div class="top-menu d-flex align-items-center">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">1</span></a>
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                        <h4 class="header">Notifications</h4>
                        <div class="notifications-wrap">
                            <a href="#" class="media">
                                <span class="d-flex">
                                    <i class="ik ik-check"></i>
                                </span>
                                <span class="media-body">
                                    <span class="heading-font-family media-heading">Invitation accepted</span>
                                    <span class="media-content">Your have been Invited ...</span>
                                </span>
                            </a>
                            <a href="#" class="media">
                                <span class="d-flex">
                                    <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                </span>
                                <span class="media-body">
                                    <span class="heading-font-family media-heading">Steve Smith</span>
                                    <span class="media-content">I slowly updated projects</span>
                                </span>
                            </a>
                            <a href="#" class="media">
                                <span class="d-flex">
                                    <i class="ik ik-calendar"></i>
                                </span>
                                <span class="media-body">
                                    <span class="heading-font-family media-heading">To Do</span>
                                    <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                </span>
                            </a>
                        </div>
                        <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="{{ asset('template/img/user.jpg') }}" alt=""></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('profile.show') }}"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                        <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                        <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit(); " role="button">
                                    <i class="ik ik-power dropdown-icon"></i>
                                    {{ __('Log Out') }}
                            </a>
                          </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
