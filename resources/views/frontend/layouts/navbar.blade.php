<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Trimatric| Architects & Engineers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/color.css')}}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}">
</head>
<body>
<!--Loader -->
<div class="loader2">
    <div class="loader loader_each"><span></span></div>
</div>
<div id="main">
    <!-- header start  -->
    <header class="main-header">
        <a href="{{url('/')}}" class="header-logo ajax"><img src="{{asset('frontend/images/logo/logo.png')}}" alt="logo"></a>
        <!-- sidebar-button -->
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap">
            <div class="nav-button">
                <span  class="nos"></span>
                <span class="ncs"></span>
                <span class="nbs"></span>
                <div class="menu-button-text">Menu</div>
            </div>
        </div>
        <!-- nav-button-wrap end-->
        <!-- sidebar-button end-->
        <!--  navigation -->
        <div class="header-contacts">
            <ul>
                <li><span> Call </span> <a href="tel:+88 029330743">+88 029330743</a></li>
                <li><span> Write </span> <a href="mailto:info@trimatric.com">info@trimatric.com</a></li>
            </ul>
        </div>
        <!-- navigation  end -->
    </header>
    <!-- header end -->
    <!-- left-panel -->
    <div class="left-panel">
        <div class="horizonral-subtitle"><span><strong></strong></span></div>
        <div class="left-panel_social">
            <ul >
                <li><a href="https://www.facebook.com/trimatric.architects/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- left-panel end -->
    <!-- share-button -->
    <div class="share-button showshare">
        <span>Share</span>
    </div>
    <!-- share-button end -->
    <!-- wrapper  -->
    <div id="wrapper">
        <!-- content-holder  -->
        <div class="content-holder" data-pagetitle="Trimatric">
            @include('frontend.layouts.partials.menu')
            <!-- nav-holder-->
            <div class="nav-overlay">
                <div class="element"></div>
            </div>
            <!-- nav-holder end -->
            @yield('content')
            <!-- share-wrapper-->
            <div class="share-wrapper">
                <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> Close</div>
                <div class="share-container fl-wrap  isShare"></div>
            </div>
            <!-- share-wrapper  end -->
        </div>
        <!-- content-holder end -->
    </div>
    <!-- wrapper end -->
</div>


