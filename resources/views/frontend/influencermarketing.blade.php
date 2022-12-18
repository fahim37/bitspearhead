
@extends('frontend.layouts.main')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('frontend/css/infulencer.css') }}">
</head>
<nav><img src="{{asset('frontend/img/inf/logo.png')}}"></nav>
  <!-- This is Section 1 -->
  <div class="section1">
    <div class="s1-left-container">
      <img src="{{asset('frontend/img/inf/s1-img.png')}}">
    </div>
    <div class="s1-right-container">
      <h1>Promote your brand with Influencer Marketing Programs</h1>
      <p>Influencer Marketing is the most lively way to interact your TG rather than any other ad format. Reach the
        right audience for your brand through Influencer Marketing in Bangladesh. Get access to data-driven insight and
        earn high ROI</p>
    </div>
  </div>
  <!-- This is Section 2 -->
  <div class="section2">
    <h1>OUR <span style="color: rgb(68, 114, 196);">OFFERINGS</span></h1>
    <div class="s2-img-div">
      <img src="{{asset('frontend/img/inf/section2-1.png')}}" alt="section2">
    </div>
  </div>
  <!-- This is Section 3 -->
  <div class="section3">
    <div class="s3-top-container">
      <div class="s3-left">
        <h2>TRADITIONAL<br>INFLUENFER MARKETING</h2><br>
        <ul>
          <li>Heavily dependent on the agencies. Person to person communication. More instinct based approach.</li>
          <li>No particular or data driven analysis for selection and their audiences (The interest group which they are
            based on)</li>
          <li>Lack of data tracking</li>
        </ul>
      </div>
      <div class="s3-right">
        <h2>DATA DRIVEN<br>INFLUENFER MARKETING</h2><br>
        <ul>
          <li>Data driven approach throughout the journey for better ROI and campaign optimization.
          </li>
          <li>Custom influencer search based on audience demographics, reach, and previous campaign analysis.</li>
          <li>LIVE performance tracking through OVONTS platforms</li>
        </ul>
      </div>
    </div>
    <div class="s3-bottom-img">
      <img src="{{asset('frontend/img/inf/section3-img.png')}}">
    </div>
  </div>
  <!-- This is Section 4 -->
  <div class="section4">
    <h1>WORK FLOW</h1>
    <div class="s4-img">
      <img src="{{asset('frontend/img/inf/section4.png')}}" alt="">
    </div>
  </div>

  <div class="section5">
    <img src="{{asset('frontend/img/inf/ovonts-logo.png')}}">
    <div class="s5-content">
      <div class="s5-left">
        <p><span style="color: red;">Ovonts</span> Unify is a SaaS based influencer management and social commerce
          enablement solution. Ovonts is on a mission to build the underlying infrastructure for social
          commerce.<br><br>
          We have an unified platform to discover influencers & brand handles, create lists, create campaigns through
          creator CRM and social campaign analytics
          <br><br>
          Enable Commerce through embedded links
          <br><br>
          Optimize campaigns through analytics & conversion events intelligence for audience segmentation
        </p>
      </div>
      <div class="s5-right">
        <img src="{{asset('frontend/img/inf/s5-img.png')}}">
      </div>
    </div>

  </div>
  <!-- This is Section 6 -->
  <div class="section6">
    <div class="s6-container">
      <div class="s6-buttons">
        <button id="btn1"><img src="{{asset('frontend/img/inf/btn1.svg')}}"> Discover</button>
        <button id="btn2"><img src="{{asset('frontend/img/inf/btn2.svg')}}"> Create</button>
        <button id="btn3"><img src="{{asset('frontend/img/inf/btn3.svg')}}"> Enable Commerce</button>
        <button id="btn4"><img src="{{asset('frontend/img/inf/btn3.svg')}}"> Measure & Optimize</button>
      </div>
      <div class="s6-img-container">
        <img id="s6-dynamic-img" src="{{asset('frontend/img/inf/1Discoverhomepage.png')}}">
      </div>
    </div>
  </div>
  <!-- This is Section 7 -->
  <div class="section7">
    <div class="s7-content">
      <div class="s7-left">
        <span>TRACK & MONITOR</span><br>
        <span class="big-text" style="line-height:6vh;">Report & Analytics</span><br>
        <span>Measure your and/or competitors social campaigns and content near real-time. Analyze the impact of your
          social efforts along your marketing funnel. and power your strategy quickly.</span>
      </div>
      <div class="s7-right">
        <img src="{{asset('frontend/img/inf/report&analytispord.png')}}">
      </div>
    </div>
  </div>
  <div class="section8">
    <div class="s8-content">
      <div class="s8-left">
        <img src="{{asset('frontend/img/inf/finalotlanding.png')}}">
      </div>
      <div class="s8-right">
        <span>ENABLE COMMERCE & GROW</span><br>
        <span class="big-text" style="line-height:6vh;">Orchestration<br>Technology</span><br>
        <span>Enable Omni-channel commerce and analyse conversion events real time-transforming social efforts into
          business outcomes Generate embedded links with target destinations, enable commerce, analyze cross-platform
          impact of your campaigns and content and segment.</span>
      </div>
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
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
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
        });
      </script>

  <script>
    $mainGrid = $('.section6')
    var x = screen.width;

    if ($(window).width() <= 600) {
      $mainGrid.css('height', $mainGrid.height() * .35);
    }
    </script>
  <script src="{{asset('frontend/js/influencer.js')}}"></script>
  @endsection