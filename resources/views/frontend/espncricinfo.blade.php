@extends('frontend.layouts.main')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('frontend/css/espn.css') }}">
    </head>
    <header>
        <img src="{{ asset('frontend/img/espn-img/header.png') }}" alt="header">
    </header>

    <div class="s1flex">

        <div class="p1">
            <h5>ESPN cricinfo is the home of cricket on the web. It's the <br>
                world's number one website for cricket news, scores <br>
                photos and opinion. It attracts both serious and casual <br>
                cricket fans globally with its comprehensive coverage of <br>
                all first-class and limited overs cricket. <br>
                <br>
                The site reaches around 10 million unique users every <br>
                month, and users spend more time on ESPNcricinfo than <br>
                almost any other sports site.
            </h5>
            <img src="{{ asset('frontend/img/espn-img/s1-2.png') }}" alt="Section1 part2 image">
        </div>

        <div class="p2"><img src="{{ asset('frontend/img/espn-img/s1-1.png') }}" alt="Section1"></div>

    </div>

    <!-- Section 2 -->
    <div class="section2">
        <h2>
            T20 WORLD CUP COVERAGE ON ESPNCRICINFO

        </h2>
        <h1>
            EXPECTED TO REACH 9MN+ UNIQUES

        </h1>

        <h2>
            ON AND OFF-PLATFORM, THROUGH ORIGINAL & DIVERSE PROGRAMMING

        </h2>
        <img src="{{ asset('frontend/img/espn-img/s2.png') }}" alt="Section2">
    </div>

    <!-- Section 3 -->
    <div class="section3">
        <img src="{{ asset('frontend/img/espn-img/s3.png') }}" alt="Section 3">
    </div>

    <!-- Section 4 -->
    <div class="section4">
        <h1>ENGAGING INNOVATION</h1>
        <div class="section4-grid">
            <div class="image-1st"><img src="{{ asset('frontend/img/espn-img/s4-1.png') }}" alt="Image 1"></div>
            <div class="image-2nd"><img src="{{ asset('frontend/img/espn-img/s4-2.png') }}" alt="Image 2"></div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="section5">
        <h1>MOBILE AD OPPORTUNITY</h1>
        <div class="section-grid">

            <img src="{{ asset('frontend/img/espn-img/s5-Picture1.png') }}" alt="Picture 1">
            <img src="{{ asset('frontend/img/espn-img/s5-Picture2.png') }}" alt="Picture 2">
            <img src="{{ asset('frontend/img/espn-img/s5-Picture3.png') }}" alt="Picture 3">
            <img src="{{ asset('frontend/img/espn-img/s5-Picture4.png') }}" alt="Picture 4">
        </div>


    </div>

    <!-- section 6 -->
    <div class="section6">
        <h1>DESKTOP AD OPPORTUNITY</h1>
        <div class="section6-grid">
            <img src="{{ asset('frontend/img/espn-img/s6-image1.png') }}" alt="Image 1">
            <img src="{{ asset('frontend/img/espn-img/s6-image2.png') }}" alt="Image 2">
        </div>
    </div>

    <!-- Section 7 -->
    <div class="section7">
        <h1>VIDEO AD OPPORTUNITY</h1>
        <div class="section7-grid">

            <img src="{{ asset('frontend/img/espn-img/s7-image1.png') }}" alt="Picture 1">
            <img src="{{ asset('frontend/img/espn-img/s7-image2.png') }}" alt="Picture 2">
            <img src="{{ asset('frontend/img/espn-img/s7-image3.png') }}" alt="Picture 3">
            <img src="{{ asset('frontend/img/espn-img/s7-image4.png') }}" alt="Picture 4">
        </div>
    </div>

    <div class="ad-gallery">
      <h1 style="font-size: 40px;">Success Stories</h1>
      <div id="card-container" class="ad-gallery-container">
          @foreach ($s_stories as $s_stories)
              <div class="gallery-card-container">
                  <button type="button" data-id='{{ $s_stories->id }}' class="gallery-card viewdetails"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <img alt="" src="{{ url('/upload/sscard/' . $s_stories->ss_card) }}">
                      <p>{{ $s_stories->ss_title }}</p>
                  </button>
              </div>
  
              <!-- Modal -->
              <div class="modal fade" id="myModal-{{ $s_stories->id }}" data-bs-backdrop="true" data-bs-keyboard="false"
                  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                          <div class="modal-body">
                              <div id="main-ss-content" class='body-bg'>
                                  <button type="button" class="btn btn-danger close-sz"
                                      data-bs-dismiss="modal">X</button>
                                  <h1 class="ss-title">Case Study<span style="color: red; margin-left: 6%;">-
                                          {{ $s_stories->adveritser_name }}</span>
                                  </h1>
                                  <div class="ss-top-right"><img src="{{ asset('upload/advertiserlogo/' . $s_stories->content_image) }}"
                                          alt="">
                                  </div>
                                  <div class="ss-bottom-right"><img
                                          src="{{ asset('frontend/img/ss-content/logos/pokkt.png') }}" alt="">
                                  </div>
                                  <div class="ss-bottom-left"><img
                                          src="{{ asset('frontend/img/ss-content/logos/bitspearhead.png') }}"
                                          alt="">
                                  </div>
                                  <div style="color: aliceblue;"></div>
                                  @if ($s_stories->status == 2)
                                      <div class="ss-center-pc">
                                          <img src="{{ asset('frontend/img/ss-content/pc.png') }}" alt="">
                                          <img src="{{ asset('upload/content/' . $s_stories->content_video) }}" alt="">
  
                                      </div>
                                  @else
                                      <div class="ss-center">
                                          <img src="{{ asset('frontend/img/ss-content/phone.png') }}" alt="">
                                          @php
                                          $extension = pathinfo(storage_path($s_stories->content_video), PATHINFO_EXTENSION);         
                                          @endphp
                                          @if ($extension == 'jpg' or $extension == 'png' or $extension == 'jpeg' or $extension == 'gif')
                                              <img src="{{ asset('upload/content/' . $s_stories->content_video) }}" alt="">
                                              @else
                                              <video class="videoplayer" autoplay="" webkit-playsinline=""
                                              playsinline="" muted="" loop=""
                                              src="{{ asset('upload/content/' . $s_stories->content_video) }}"></video>
                                              @endif
                                      </div>
                                  @endif
  
                                  <div class="ss-left">
                                      <p>Platform:</p>
                                      <p style="font-weight: bold;">{{ $s_stories->platform_name }}</p><br><br>
                                      <p>Placement:</p>
                                      <p style="font-weight: bold;">{{ $s_stories->placement }}</p><br><br>
                                      <p>Campaign Objective:</p>
                                      <p style="font-weight: bold;">{{ $s_stories->campaign_objective }}</p><br><br>
                                      <p>Campaign Module:</p>
                                      <p style="font-weight: bold;">{{ $s_stories->campaign_module }}</p><br><br>
                                      <p>Campaign Duration:</p>
                                      <p style="font-weight: bold;">{{ $s_stories->campaign_duration }}</p>
                                  </div>
  
                                  <div class="ss-right">
                                      @foreach ($s_stories->attr as $s_attr)
                                          <p>{{ $s_attr->title }}</p>
                                          <p style="font-weight: bold;">{{ $s_attr->dynamic_field }}</p><br><br>
                                      @endforeach
                                  </div>
  
                              </div>
  
                          </div>
                      </div>
                  </div>
              </div>
              <!-- -------modal-end--------------- -->
          @endforeach
      </div>
  </div>
  <script>
      $(document).ready(function() {
          // $('.viewdetails').click(function() {
          //     $('#myModal').modal('show')
          // });
          $('.viewdetails').click(function() {
              let id = $(this).data('id');
              $('#myModal-' + id).modal('show')
          });
      });
  </script>




    <div class="trusted-brands-container">
        <h1>Trusted By <span>Brands</span></h1>
        <div class="swiper2 mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/arong.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/barger.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/bkash.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/bl.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/citygroup.png') }}">
                </div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/dabour.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/dan_cake.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/emami.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/foodpanda.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/goo.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/grameen.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/huddai.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/nagad.png') }}">
                </div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/Naslate.jpg') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/samsung.jpg.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/singer.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/toyota.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/ESPNCricinfo/walton.png') }}"
                        alt=""></div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper2 = new Swiper(".mySwiper", {
            slidesPerView: 6,
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 1500,
            },
        });
    </script>
@endsection
