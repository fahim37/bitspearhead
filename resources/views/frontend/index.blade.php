@extends('frontend.layouts.main')
@section('content')
<head>
  <style>
    @media only screen and (max-width: 600px) {
    p{
    margin-top: 0;
    margin-bottom: 1rem;
    width: -webkit-max-content;
    width: -moz-max-content;
    width: max-content;
  }
}
  </style>
</head>
<div id="welcome">
    <img src="{{asset('frontend/img/asset/welcome-img.png')}}" alt="Welcome">
    <p data-aos="fade-up"><span style="font-size: 20px;">Welcome</span><br>Starting a journey in 2016, Bitspearhead
      Limited was focused to regulate its business in a different approach other than the traditional digital happening
      in Bangladesh. Bitspearhead wanted to thrive its success in other effective digital platforms which will not only
      increase the brand’s value in a digital approach to end-consumers but also ensure the ROI of the brand’s digital
      spending.<br><br>
      On the basis of the belief of “leveraging digital”, which is also the slogan of Bitspearhead, we have been
      partnering with multiple global digital platforms throughout our journey in Bangladesh Market.</p>
  </div>
  <span class="anchor"></span>

  <div id="services">
    <div class="services-container">
      <div class="services-left-content" data-aos="fade-right">
        <h2 class="services-header">Our Services</h2>
        <div class="service-details">
          <img src="{{asset('frontend/img/asset/icon-advertising.png')}}" alt="ad-support">
          <div>
            <h4>Advertising Support</h4>
            <small>
              <ul>
                <li>Messaging App Advertisement</li>
                <li>Mobile Gaming Advertisement</li>
                <li>Data Driven Influencer Marketing Solution</li>
                <li>Programmatic Advertisement</li>
              </ul>
            </small>
          </div>
          <img src="{{asset('frontend/img/asset/icon-content.png')}}" alt="content-support">
          <div>
            <h4>Content Support</h4>
            <small>Rich Media, Innovative interactive ads HTML creation</small>
          </div>
          <img src="{{asset('frontend/img/asset/icon-tracking.png')}}" alt="tracking-support">
          <div>
            <h4>Tracking Support</h4>
            <small>Provide best tracking solution for Brand Safety</small>
          </div>

        </div>

      </div>
      <div class="services-right-content" data-aos="fade-left">
        <div class="services-swiper-div-center">
          <div class="swiper" style="margin-top: 5%;">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="frame-ad-container">
                  <img src="{{asset('frontend/img/asset/phone-img.png')}}">
                  <img src="{{asset('frontend/img/asset/ad-1.gif')}}">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="frame-ad-container">
                  <img src="{{asset('frontend/img/asset/phone-img.png')}}">
                  <img src="{{asset('frontend/img/asset/ad-2.gif')}}">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="frame-ad-container">
                  <img src="{{asset('frontend/img/asset/phone-img.png')}}">
                  <img src="{{asset('frontend/img/asset/ad-3.gif')}}">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="frame-ad-container">
                  <img src="{{asset('frontend/img/asset/phone-img.png')}}">
                  <img src="{{asset('frontend/img/asset/ad-4.gif')}}">
                </div>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="our-reach">
    <h1 class="our-reach-header">Our Reach & Partners</h1>
    <div class="reach-container">
      <div class="reach-titile-top">
        <h2 style="font-size: 35px;">10+</h2>
        <p>Premium Platforms</p>
      </div>
      <div data-aos="fade-right">
        <div class="reach-circle">
          <img class="reach-circle-left-img" src="{{asset('frontend/img/asset/earth.png')}}">
          <div class="reach-logos">
            <a class="reach-logo-1" href="{{ route('frontend.imo') }}" ><img
                style="transform: scale(1.1); margin-top: 6.5px;" src="{{asset('frontend/img/asset/imologo.png')}}"></a>
            <a class="reach-logo-2" href="{{ route('frontend.likee') }}" ><img
                style="transform: scale(1.15); margin-top: 7px;" src="{{asset('frontend/img/asset/likee-logo.png')}}"></a>
            <a class="reach-logo-3" href="{{ route('frontend.appnext') }}" ><img
                style="transform: scale(1.5); margin-top: 7px;" src="{{asset('frontend/img/asset/appnext-logo.png')}}"></a>
            <a class="reach-logo-4" href="{{ route('frontend.appnext') }}" ><img
                style="transform: scale(1.25); margin-top: 8px;" src="{{asset('frontend/img/asset/mcanvas logo.png')}}"></a>
            <a class="reach-logo-5" href="{{ route('frontend.appnext') }}" ><img
                style="transform: scale(1.3); margin-top: 7px;" src="{{asset('frontend/img/asset/yahoologo.png')}}"></a>
            <a class="reach-logo-6" href="{{ route('frontend.appnext') }}" ><img
                style="transform: scale(1.1) translateX(-1px); margin-top: 5.5px;" src="{{asset('frontend/img/asset/sizmeklogo.png')}}"></a>
            <a class="reach-logo-7" href="{{ route('frontend.appnext') }}" ><img
                style="transform: scale(1.9); margin-top: 10px;" src="{{asset('frontend/img/asset/influencermktlogo.png')}}"></a>
            <a class="reach-logo-8" href="{{ route('frontend.appnext') }}" ><img
                style="transform: scale(1.2); margin-top: 12px;" src="{{asset('frontend/img/asset/pokkt-logo.png')}}"></a>
            <a class="reach-logo-9" href="{{ route('frontend.appnext') }}" ><img
                style="transform: scale(1.3); margin-top: 12px;" src="{{asset('frontend/img/asset/miq-logo.png')}}"></a>
            <a class="reach-logo-10" href="/beatspearhead/espn/espn.html" ><img
                style="transform: scale(1.8); margin-top: 12px;" src="{{asset('frontend/img/asset/espn-logo.png')}}"></a>
            <a class="reach-logo-11" href="/beatspearhead/gupshup.html" ><img
                style="transform: scale(1.4); margin-top: 8px;" src="{{asset('frontend/img/asset/gupshuplogo.png')}}"></a>
          </div>
        </div>
      </div>
      <div class="reach-circle2" data-aos="fade-left">
        <img class="reach-circle-right-img" src="{{asset('frontend/img/asset/mapbd.png')}}">
        <div class="reach-right-points">
          <a class="reach-right-point-1"><img src="{{asset('frontend/img/asset/right-point-1.png')}}">
            <p>Branding<br>advertisers</p>
          </a>
          <a class="reach-right-point-2"><img src="{{asset('frontend/img/asset/right-point-2.png')}}">
            <p>Performance<br>advertisers</p>
          </a>
        </div>
      </div>
      <div class="reach-circle-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1700">
        <img src="{{asset('frontend/img/asset/logo.png')}}" alt="bitspearhead_logo">
      </div>
      <div class="reach-titile-bottom">
        <h2 style="font-size: 35px;">200+</h2>
        <p>Trusted advertisers<br>
          in Bangladesh</p>
      </div>
    </div>
  </div>
  <div id="contact-us">
    <h1 class="contact-us-header" data-aos="fade-right">Connect with us <span
        style="color: #0c7271; font-size: xx-large;">↓</span></h1>
    <div class="contact-us-container">
      <div class="contact-us-div" data-aos="fade-up-right">
        <a  target="_blank" href="/contact-us/contact-us.html">
          <img src="{{asset('frontend/img/asset/contact-us-img1.png')}}" alt="img">
          <h3>I'm interested in partnership opportunities to monetize my platform's advertise inventory.</h3>
          <p>Contact Us</p>
        </a>
      </div>
      <div class="contact-us-div" data-aos="zoom-in-up">
        <a target="_blank" href="/contact-us/contact-us.html">
          <img src="{{asset('frontend/img/asset/contact-us-img2.png')}}" alt="img">
          <h3>I'm an advertiser looking to promote my business on top digital platforms.</h3>
          <p>Contact Us</p>
        </a>
      </div>
      <div class="contact-us-div" data-aos="fade-up-left">
        <a target="_blank" href="/contact-us/contact-us.html">
          <img src="{{asset('frontend/img/asset/contact-us-img3.png')}}" alt="img">
          <h3>I have a general inquiry.</h3>
          <p>Contact Us</p>
        </a>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script>
    const swiper2 = new Swiper('.swiper', {
      loop: true,
      // autoplay: {
      //   delay: 2600,
      //   disableOnInteraction: false,
      // },
      pagination: {
        el: '.swiper-pagination',
        cliclable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

  </script>
@endsection
