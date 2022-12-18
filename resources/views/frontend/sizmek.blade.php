@extends('frontend.layouts.main')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('frontend/css/sizmek.css') }}">
</head>
 <!-- This is header -->
 <header>
    <img src="{{asset('frontend/img/siz/header.png')}}" alt="Header">
</header>


<!-- This is section 1 -->
<div class="container">
    <div class="row s1-size">
        <div class="col-12 col-sm-6 d-flex flex-column justify-content-center align-items-center">
            <img style="width: 60%;" src="{{asset('frontend/img/siz/section1-p1.png')}}" alt="Part1">
            <p class="w-75 ms-auto me-auto mt-4 text-center">Escape Velocity is Sizmek by Amazon’s
                preferred reseller and services partner.
                Our team has been providing services
                to Sizmek by Amazon’s customers for
                over 12 years in markets across India,
                the Middle East, APAC, Europe and
                North America.
            </p>
        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center">
            <img style="width: 80%;" src="{{asset('frontend/img/siz/section1-p2.png')}}" alt="Part2">
        </div>
    </div>
</div>

<!-- This is section 2 -->
<div class="container">

    <div class="Adstack">
        <h2>AD STACK</h2>
    </div>
    <div class="row">
        <div class="col-md-3 mb-5 text-center">
            <img class="sameheight" style="width: 70%; height: 150px;" src="{{asset('frontend/img/siz/section2 p1.png')}}" alt="">
        </div>
        <div class="col-md-3 mb-5 text-center">
            <img class="sameheight" style="width: 70%; height: 150px;" src="{{asset('frontend/img/siz/section2 p2.png')}}" alt="">
        </div>
        <div class="col-md-3 mb-5 text-center">
            <img class="sameheight" style="width: 70%; height: 150px;" src="{{asset('frontend/img/siz/section2 p3.png')}}" alt="">
        </div>
        <div class="col-md-3 mb-5 text-center">
            <img class="sameheight" style="width: 70%; height: 150px;" src="{{asset('frontend/img/siz/section2 p4.png')}}" alt="">
        </div>

    </div>

</div>
<!-- This is Section 3 -->

<div class="container-fluid mt-5 mb-5 section3">
    <div class="row">
        <div class="col-12 m-5 font-weight-bold">
            <h3 class="">Brand Safety, Ad Fraud & Viewability by Sizmek</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-7 d-flex justify-content-center align-items-center mb-5">

            <img style="width: 90%;" src="{{asset('frontend/img/siz/section3.png')}}" alt="Part4">

        </div>
        <div class="col-sm-12 col-md-5 d-flex justify-content-center align-items-center">
            <ul class="list-4">
                <li>Verify that your ad appeared in the most relevant context</li>
                <li>Work with publishers to
                    improve placement</li>
                <li>Become more efficient to
                    boost ROI</li>
            </ul>
        </div>
    </div>
</div>
<!-- This is Section 5 -->
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h3 class="text-primary">Ad Tracking</h3>
            <img style="width: 100%;" src="{{asset('frontend/img/siz/section4.png')}}" alt="SEC5">
        </div>
        <div class="col-sm-6">
            <h3 class="text-primary">Ad Serving</h3>
            <img style="width: 100%;" src="{{asset('frontend/img/siz/section5.png')}}" alt="SEC6">
        </div>
    </div>
</div>

<!-- This is Section 6 -->
<div class="container">
    <h2 class="text-primary">Brand Safety</h2>
    <h4 class="text-primary">Don’t let this happen to you..</h4>
    <div class="row mt-5 mb-5">

        <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center">
            <img style="width:80%;" src="{{asset('frontend/img/siz/section6.png')}}" alt="">
        </div>
        <div class="col-sm-12 col-md-6 m-auto">
            <h3 class="text-secondary text-center p-5">Identifies 15 negative <br>
                content categories like <br>
                Mature, Negative News, <br>
                Firearms, Alcohol etc.</h3>
        </div>

    </div>
</div>




<!-- This is Section 7 -->

<div class="container mt-3">

    <h1 class="mb-5">Ad Fraud</h1>
    <ul>
        <li class="h4 mb-5">Identifies fraudulent traffic coming from bot activity and malware</li>
    </ul>
    <div class="row">
        <div class="col-sm-12 col-md-4 d-flex flex-column justify-content-center align-items-center">
            <div style="width: 200px; height: 150px; " class="text-center p-5 bg-primary">
                <h4 class="text-white">Ghost
                    Sites</h4>
            </div>
            <div style="width: 200px; height: 100px; ">
                <h6 class="text-center">Avoid sites that
                    were never
                    intended for a
                    human audience</h6>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 d-flex flex-column justify-content-center align-items-center">
            <div style="width: 200px; height: 150px; " class="text-center p-5 bg-primary">
                <h4 class="text-white">Ad Stacking</h4>
            </div>
            <div style="width: 200px; height: 100px; ">
                <h6 class="text-center">Make sure
                    publishers serve
                    just one ad per
                    placement</h6>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 d-flex flex-column justify-content-center align-items-center">
            <div style="width: 200px; height: 150px; " class="text-center p-5 bg-primary">
                <h4 class="text-white">Zero Ads</h4>
            </div>
            <div style="width: 200px; height: 100px; ">
                <h6 class="text-center">Don’t find yourself
                    in places where
                    the publisher
                    never intended</h6>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <h1 class="bg-primary text-white text-center">Fraudulent Impressions</h1>
    </div>

</div>



<!-- This is Section 8 -->

<div class="container mt-3">

    <h2 class="mb-5">Ad Exposure</h2>
    <ul>
        <li class="h3 mb-5">Understand your share of voice to maximize the value of each impression</li>
    </ul>
    <div class="row">
        <div class="col-sm-12 col-md-3 d-flex flex-column justify-content-center align-items-center">
            <div style="width: 200px; height: 150px; " class="text-center p-5 bg-primary">
                <h3 class="text-white">Ad Count</h3>
            </div>
            <div style="width: 200px; height: 100px; ">
                <h6 class="text-center">Don’t compete
                    with hoards of
                    advertisers for
                    user attention</h6>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 d-flex flex-column justify-content-center align-items-center">
            <div style="width: 200px; height: 150px; " class="text-center p-5 bg-primary">
                <h3 class="text-white">Ad Collision</h3>
            </div>
            <div style="width: 200px; height: 100px; ">
                <h6 class="text-center">Don’t serve
                    multiple ads to
                    the same user at
                    the same time</h6>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 d-flex flex-column justify-content-center align-items-center">
            <div style="width: 200px; height: 150px; " class="text-center p-5 bg-primary">
                <h3 class="text-white">Ad Carousel</h3>
            </div>
            <div style="width: 200px; height: 100px; ">
                <h6 class="text-center">Ads that refresh
                    automatically are
                    a waste of your
                    money</h6>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 d-flex flex-column justify-content-center align-items-center">
            <div style="width: 200px; height: 150px; " class="text-center p-5 bg-primary">
                <h3 class="text-white">Ad Clutter</h3>
            </div>
            <div style="width: 200px; height: 100px; ">
                <h6 class="text-center">Identifies the level
                    of clutter on pages
                    based on a
                    combination of
                    signals, incl. qty,
                    density and sizes of
                    ads on the page</h6>
            </div>
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
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/Sizmak/cocacola.png')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/Sizmak/daraz.png')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/Sizmak/Naslate.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/Sizmak/pran.png')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/Sizmak/reciket.png')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/Sizmak/toyota.png')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/Sizmak/walton.png')}}" alt=""></div>
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
        autoplay: {
delay: 1500,
},
    });
</script>
@endsection