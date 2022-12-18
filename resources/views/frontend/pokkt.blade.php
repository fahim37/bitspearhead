@extends('frontend.layouts.main')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('frontend/css/style-pokkt.css') }}">
    </head>
    <nav class="pokkt-nav">
        <img src="{{ asset('frontend/img/pokkt-images/pokktlogo.png') }}" alt="logo">
    </nav>
    <div class="section-1">
        <div class="s1-container">

            <div class="s1-left">
                <h2>One-stop solution for in-app mobile advertising</h2>
                <p>POKKT is a leading mobile in-app & web advertising platform that caters to top global brands across
                    verticals, helping them achieve a vast spectrum of marketing objectives.<br><br>Our key offerings
                    include but are not limited to rewarded video ads, native ads, rich media interactive ads and more;
                    we specialize in both brand and performance marketing within gaming, non-gaming app and web
                    inventory that span locally & globally.</p>
                <img src="{{ asset('frontend/img/pokkt-images/section-1-buddys.png') }}" alt="buddys">
                <p>Monthly Active User in Bangladesh: <span style="font-weight: bold;">41mn</span></p>
            </div>
            <div class="s1-right">
                <img src="{{ asset('frontend/img/pokkt-images/section-1-image.png') }}" alt="img">
            </div>

        </div>
    </div>
    <div class="section-2">
        <div class="s2-top">
            <div class="s2-top-card">
                <img src="{{ asset('frontend/img/pokkt-images/s2-card1.png') }}" alt="img">
                <h1>Viewability<br>Assurance</h1>
                <p>Full-screen only, high engagement opt-in video ads</p>
            </div>
            <div class="s2-top-card">
                <img src="{{ asset('frontend/img/pokkt-images/s2-card2.png') }}" alt="img">
                <h1>Audience<br>Targeting</h1>
                <p>Location, Device, Demography & Interest, targeting with Capping and Day-time parting</p>
            </div>
            <div class="s2-top-card">
                <img src="{{ asset('frontend/img/pokkt-images/s2-card3.png') }}" alt="img">
                <h1>Campaign<br>Analytics</h1>
                <p>Live dashboard analytics to measure campaign performance</p>
            </div>
            <div class="s2-top-card">
                <img src="{{ asset('frontend/img/pokkt-images/s2-card4.png') }}" alt="img">
                <h1>Engaging<br>End-Cards</h1>
                <p>Engross audiences with post-video interactive End Cards</p>
            </div>
        </div>
        <div class="s2-gif-container">
            <img src="{{ asset('frontend/img/pokkt-images/section-2-gif.gif') }}" alt="ad-gif">
        </div>
    </div>
    <div class="section-3">
        <h1>Ad Opportunity</h1>
        <div class="s3-top-content">
            <div class="s3-top-left">
                <img src="{{ asset('frontend/img/pokkt-images/phone-frame-landscape.png') }}">
                <img src="{{ asset('frontend/img/pokkt-images/s3-top-gif.gif') }}">
            </div>
            <div class="s3-top-right">
                <h2>REWARDED VIDEO ADS</h2>
                <ol>
                    <li>Users play their favourite <span class="color-blue">game</span></li>
                    <li>Users get an opportunity to watch a <span class="color-blue">brand video ad</span> to revive
                        life / get extra life or premium in-game currency/rewards</li>
                    <li>Users opt-in to enjoy their ad and <span class="color-blue">get rewarded</span></li>
                    <li>Users see brand communication on the end card and are encouraged to visit the <span
                            class="color-blue">desired landing page</span></li>
                </ol>
            </div>
        </div>
        <div class="s3-bottom-content">
            <div class="s3-bottom-left">
                <h2>RICH MEDIA</h2>
                <ol>
                    <li>Users play their <span class="color-blue">favourite mobile game</span></li>
                    <li>Users engage with sticky, <span class="color-blue">engaging interactive brand ads</span></li>
                    <li>Users see brand communication & are encouraged to visit the <span class="color-blue">desired
                            landing page</span></li>
                </ol>
            </div>
            <div class="s3-bottom-right">
                <img src="{{ asset('frontend/img/pokkt-images/phone-frame-portrait.png') }}">``
                <img src="{{ asset('frontend/img/pokkt-images/s3-bottom-gif.gif') }}">
            </div>
        </div>

    </div>
    <div class="section-4">
        <h1>In Game ADS</h1>
        <div class="s4-contents">
            <div class="s4-left">
                <img src="{{ asset('frontend/img/pokkt-images/s4-left.png') }}">
            </div>
            <div class="s4-right">
                <img src="{{ asset('frontend/img/pokkt-images/s4-img1.png') }}">
            </div>
        </div>
    </div>
    <div class="section-5">
        <h1>TARGETING CAPABILITIES</h1>
        <div class="s5-contents">
            <div class="s5-left">
                <img src="{{ asset('frontend/img/pokkt-images/s5-left.png') }}">
            </div>
            <div class="s5-right">
                <img src="{{ asset('frontend/img/pokkt-images/s5-img.png') }}">
            </div>
        </div>
    </div>
    <div class="section-6">
        <h1>TOP AUDIENCE PERSONAS WITH POKKT</h1>
        <h3>IDENTIFYING THE MOST SUITABLE AUDIENCE</h3>
        <div class="s6-content-img">
            <img src="{{ asset('frontend/img/pokkt-images/s6-img.png') }}">
        </div>
        <h3 class="s6-bottom-right">And Many More</h3>
    </div>
    <div class="section-7">
        <h1>PARTNERSHIPS & COMPATIBILITIES</h1>
        <div class="s7-content-img">
            <img src="{{ asset('frontend/img/pokkt-images/s7-img.png') }}">
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
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/apex.png') }}"
                        alt=""></div>

                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/Basundhara.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/bata.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/Berger.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/bkash.png') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/bl.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/dabour.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/emami.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/foodpanda.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/goo.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/grameen.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/Hero.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/macro.png') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/marks.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/mgi.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/nagad.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/Runner.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/samsung.jpg.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/senso.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/singer.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/tiktok.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/Uni.png') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/walton.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Pokkt/upay.png') }}"></div>

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
