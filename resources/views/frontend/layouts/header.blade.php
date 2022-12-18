<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
{{-- <link rel="stylesheet" href="{{asset('frontend/css/default-yahoo.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/espn.css') }}">

<link rel="stylesheet" href="{{ asset('frontend/css/infulencer.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/likee-style-default.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/sizmek.css') }}">

<link rel="stylesheet" href="{{ asset('frontend/css/style-appnext.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style-gupshup.css') }}">

<link rel="stylesheet" href="{{ asset('frontend/css/style-miq.css') }}">


<link rel="stylesheet" href="{{ asset('frontend/css/yahoo.css') }}"> --}}

<link rel="stylesheet" href="{{ asset('frontend/css/story.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/common.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
  integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="https://static-web.likee.com/as/common-static/ads-home/favicon.png"
    type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <!-- 导入lottie -->
  <script src="https://static-web.likee.com/as/common-static/ads-home/lottie.min.5.5.6.js"></script>
  <link href="https://static-web.likee.com/as/common-static/ads-home/video-js.7.8.4.css" rel="stylesheet" />
  <script src="https://static-web.likee.com/as/common-static/ads-home/videojs-ie8.min.7.8.4.js"></script>
  <script src="https://static-web.likee.com/as/common-static/ads-home/video.min.7.8.4.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js"></script>

<title>bitspearhead | Home</title>
</head>

<body>
  <!-- Navbar Start -->
  <nav class='navbar'>
    <div style="width: 11vw;"></div>
    <a class="toggle-button-menu"><i class="fa-solid fa-bars fa-2x"></i></a>
    <div class='navbar-links'>
      <ul>
        @if (Route::currentRouteName() !== "frontend.home")
        <li><a href='/#welcome'>HOME</a></li>
        @else
        <li><a href='#welcome'>HOME</a></li>
        @endif
        @if (Route::currentRouteName() !== "frontend.home")
        <li><a href='/#services'>OUR SERVICES</a></li>
        @else
        <li><a href='#services'>OUR SERVICES</a></li>
        @endif
        <li class="dropdown">
          <a class="" href="#our-reach">OUR PARTNERS</a>
          <a class="dropdown-toggle dropdown-toggle-split" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false"></a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item"  href="/beatspearhead/imo.html">IMO</a></li>
            <li><a class="dropdown-item"  href="/beatspearhead/likee.html">LIKEE</a></li>
            <li><a class="dropdown-item"  href="/beatspearhead/appnext.html">APPNEXT</a></li>
            <li><a class="dropdown-item"  href="/beatspearhead/mcanvas.html">MCANVAS</a></li>
            <li><a class="dropdown-item"  href="/beatspearhead/yahoo/yahoo.html">YAHOO</a></li>
            <li><a class="dropdown-item"  href="/beatspearhead/Sizmek/sizmek.html">SIZMEK</a></li>
            <li><a class="dropdown-item"  href="/beatspearhead/pokkt.html">POKKT</a></li>
            <li><a class="dropdown-item"  href="/beatspearhead/miq/index.html">MIQ</a></li>
            <li><a class="dropdown-item"  href="/beatspearhead/espn/espn.html">ESPN CRICINFO</a></li>
            <li><a class="dropdown-item"
                href="/beatspearhead/InfluencerMarketing/influencer.html">INFLUENCER MARKETING</a></li>
                <li><a class="dropdown-item"  href="/beatspearhead/gupshup.html">GUPSHUP</a></li>
          </ul>
        </li>
        @if (Route::currentRouteName() !== "frontend.home")
        <li><a href='/#contact-us'>CONTACT US</a></li>
        @else
        <li><a href='#contact-us'>CONTACT US</a></li>
        @endif
        <li><a id="loginbtn" href='https://www.bitsdashboard.com/'>LOGIN</a></li>
      </ul>
    </div>
    <div class='navbar-logo'>
      <a href="https://bitspearhead.com"><img src="{{ asset('frontend/img/asset/logo.png') }}" alt="Logo"> </a>
    </div>
  </nav>
