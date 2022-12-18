@extends('frontend.layouts.main')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('frontend/css/imo-style-default.css') }}">
    </head>
    <div class="navbar-imo">
        <nav><img src="{{ asset('frontend/img/images/imologo.png') }}" alt="imo"></nav>
    </div>
    <div class="section-1">
        <div class="s1-left">
            <img src="{{ asset('frontend/img/imo-img/section-1.png') }}">
        </div>
        <div class="s1-right">
            <div style="font-size: 25px; font-weight: bolder;">About imo</div>
            <div style="color: gray;">imo is a global instant communication platform providing audio and video
                communication service, instant message function and public service function.</div>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEwAAABMCAMAAADwSaEZAAAAe1BMVEUAAAAAnv9ayf9ayP9ayf8Ss/8Anv9byf8Anf8Anv8Anv8An/8Anv9k0v8Anv9ayf9ayv8An/9by/9czf8Aof9byf8AoP9bzP9dzP9Fzf9ayf8AoP9by/9fzf9byf9ayf8Anv9ayf8Anv8Anv8Ao/9ayf8Aof9ayP8Anf8iEwGJAAAAJ3RSTlMA+eNmlwndYPPpyZB8EbqsgltIHxrpTTQtBcpBPhfxua5saTcU2SYo76R+AAABhElEQVRYw+3V2W6DMBAFUEMJhCwkkI3sS9OO//8Lqz6gwZqpbxWL9sXn2boyZhYTRf9jW5VJPh15TsyzlDaLE0wajW1nZnQZdVJ/1sT2rY20o76FJyuxrlqcWJJrA7PYu3EVHAM+dW2F0rhI2uthVvEQby+oWTOrERcTGnQxVisXw1cb6WFj5WI4bGp1OKyQYTkMmxMDlZvAsJZ0BxlWwrAV6a4yrHr5zZbK5Hk5bPXrOrsZlqLSYGM17GnYDrw/qtoStxOajMydCWeSsqHnWfikDd8Bg2yn8L0ZDeRY18e98Tg3RdMaB1p4U/1XHqhzaQyD7ZmLAy0YjOxhmX67lIS5npXrexOtpzsejgwulAxuJ5Z0bUs/ucOFzibOmNWc4cxmn98nruThHYvy2fbEwOpcW6+jMR/kharC/Qfk1xhmAVOAsAtnPVHYNiWg393AjZB+fwMJIS18f0bIiassPKzgnxke9hbDYthfhA3TAVV42IqndniYYVVo2I6z8HiEHxlFHl+sz6kfv75u9QAAAABJRU5ErkJggg=="
                class="s2img"></img>
            <div style="color: gray;">200 million+ MAU</div>
            <div style="color: gray;">44 million+ MAU in Bangladesh
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="s2-left">
            <div class="my-title">imo Product Features</div>
            <div class="my-mini-title">High-quality and stable call experience</div>
            <div style="color: gray;">With advanced technology, imo provides stable calls even in an unstable or
                weak network area, ensuring everyone can be connected anywhere, anytime.</div>
            <div class="my-mini-title">Free messaging</div>
            <div style="color: gray;">Free messaging your friends anytime, anywhere.</div>
            <div class="my-mini-title">Sharing social updates in real-time</div>
            <div style="color: gray;">The story allows users to share moments with pictures, videos, and text.
            </div>
        </div>
        <div class="s2-right">
            <img src="{{ asset('frontend/img/imo-img/section-2.png') }}">

        </div>
    </div>
    <!-- --------------section3----------------->
    <div class="section-1">
        <div class="s1-left">
            <img src="{{ asset('frontend/img/imo-img/section-3.png') }}">
        </div>
        <div class="s1-right">
            <div class="my-title">Our Business Value</div>
            <div class="my-mini-title">Massive traffic and high loyalty users</div>
            <div style="color: gray;">imo has enormous traffic, high loyalty users, and a significant
                influence worldwide.</div>
            <div class="my-mini-title">Users have excellent consumption potential</div>
            <div style="color: gray;">imo's users have tremendous consumption potential, which is valuable to
                brands.</div>
            <div class="my-mini-title">Maximum in-app brand exposure</div>
            <div style="color: gray;">imo advertising resources surround the user’s browsing path in an
                all-round way so that the brand and user can build efficient communication.
            </div>
        </div>
    </div>
    <!-- ------------------------------------------ -->
    <div class="product-inner">
        <div class="tab-wrap">
            <div class="tab-box">
                <div class="s5word1" enKey="lang221">Grow your business on imo</div>
                <ul id="tabs" class="tab-bar clear">
                    <li class="show" enKey="lang222">Brand Takeover</li>
                    <li enKey="lang226">Top Banner</li>
                    <li enKey="lang230">Chat List & Audio Call</li>
                    <li enKey="lang234">End Call</li>
                    <li enKey="lang238">Story Stream</li>
                    <li enKey="lang242">Story Feed</li>
                </ul>
                <div class="line1"></div>
                <div class="tab-list">
                    <div class="tab-item show">
                        <div>

                            <div class="section6-box">
                                <div class="production6">
                                    <div class="first-content-video">
                                        <video id="my-player" class="video-js" muted loop autoplay preload="auto"
                                            poster="https://static-web.likeevideo.com/as/common-static/ads-home/videos/imo_cover1.png"
                                            data-setup="{}">
                                            <source
                                                src="https://static-web.bigolive.tv/as/common-static/ads-home/videos/Takeover5.mp4"
                                                type="video/mp4" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider
                                                upgrading to a web browser that
                                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                                    HTML5 video</a>
                                            </p>
                                        </video>
                                    </div>
                                    <img src="{{ asset('frontend/img/images/8.757002a.png') }}" class="img7"> </img>
                                    <div class="performance-box">
                                        <div class="s6w1" enkey="lang222">Brand Takeover</div>
                                        <div class="s6w2" enkey="lang223">Brand Takeover ads make a solid introduction to
                                            your brand with a
                                            full-screen display, driving brand awareness by delivering a strong visual
                                            impact.</div>
                                        <div class="line2"> </div>
                                        <div class="s6w3" enkey="lang224">Grab wide user attention immediately with imo
                                            the first screen.
                                        </div>
                                        <div class="s6w4" enkey="lang225">Multiple creative specs support the high-quality
                                            display.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div>
                            <div class="section6-box">
                                <div class="production6">
                                    <div class="first-content-video">
                                        <video id="my-player" class="video-js" muted loop autoplay preload="auto"
                                            poster="https://static-web.likeevideo.com/as/common-static/ads-home/videos/imo_cover2.png"
                                            data-setup="{}">
                                            <source
                                                src="https://static-web.bigolive.tv/as/common-static/ads-home/videos/Top_Banner5.mp4"
                                                type="video/mp4" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider
                                                upgrading to a web browser that
                                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                                    HTML5 video</a>
                                            </p>
                                        </video>
                                    </div>
                                    <img src="{{ asset('frontend/img/images/8.757002a.png') }}" class="img7"> </img>
                                    <div class="performance-box">
                                        <div class="s6w1" enKey="lang226">Top Banner</div>
                                        <div class="s6w2" enKey="lang227">
                                            Top banner ads establish exclusive brand identity by sticking
                                            to home page first screen. “Always-on” mode brings enormous
                                            attention to your brand
                                        </div>
                                        <div class=line2> </div>
                                        <div class="s6w3" enKey="lang228">
                                            Home page fixed placement ensures high attention
                                        </div>
                                        <div class="s6w4" enKey="lang229">
                                            Powerfully and simply convey brand concept, quickly reach
                                            targeting users
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div>
                            <div class="section6-box">
                                <div class="production6">
                                    <div class="first-content-video item3">
                                        <video id="my-player" class="video-js" muted loop autoplay preload="auto"
                                            poster="https://static-web.likeevideo.com/as/common-static/ads-home/videos/imo_cover3.png"
                                            data-setup="{}">
                                            <source
                                                src="https://static-web.bigolive.tv/as/common-static/ads-home/videos/Chat_list_Audio_Call5.mp4"
                                                type="video/mp4" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider
                                                upgrading to a web browser that
                                                <a href="https://videojs.com/html5-video-support/"
                                                    target="_blank">supports HTML5 video</a>
                                            </p>
                                        </video>
                                    </div>
                                    <img src="{{ asset('frontend/img/images/11.78a24a3.png') }}" class="img7"> </img>
                                    <div class="performance-box">
                                        <div class="s6w1" enKey="lang230">Chatlist & Audio Call</div>
                                        <div class=s6w2 enKey="lang231">
                                            Combining both of chatlist and audio call ads to shorten marketing
                                            route, reach more users effectively
                                        </div>
                                        <div class=line2> </div>
                                        <div class=s6w3 enKey="lang232">
                                            Accessible traffic is further more on account of two resources
                                            tightly bound
                                        </div>
                                        <div class=s6w5 enKey="lang233">
                                            Various creative formats supported, flexibly and conveniently
                                            deliver brand information
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div>
                            <div class="section6-box">
                                <div class="production6">
                                    <div class="first-content-video item4">
                                        <video id="my-player" class="video-js" muted loop autoplay preload="auto"
                                            poster="https://static-web.likeevideo.com/as/common-static/ads-home/videos/imo_cover4.png"
                                            data-setup="{}">
                                            <source
                                                src="https://static-web.bigolive.tv/as/common-static/ads-home/videos/End_Call5.mp4"
                                                type="video/mp4" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider
                                                upgrading to a web browser that
                                                <a href="https://videojs.com/html5-video-support/"
                                                    target="_blank">supports HTML5 video</a>
                                            </p>
                                        </video>
                                    </div>
                                    <img src="{{ asset('frontend/img/images/12.6e37b3c.png') }}" class="img7"> </img>
                                    <div class="performance-box">
                                        <div class="s6w1" enKey="lang234">End Call</div>
                                        <div class=s6w2 enKey="lang235">
                                            Get an inserted brand presentation on end call ads, attract
                                            targeting userdus by influencing their daily usage action.
                                        </div>
                                        <div class=line2> </div>
                                        <div class=s6w3 enKey="lang236">
                                            Full-screen ad display, demonstrates brand content more
                                            obviously
                                        </div>
                                        <div class=s6w5 enKey="lang237">
                                            More engaging ad experience than usual
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div>
                            <div class="section6-box">
                                <div class="production6">
                                    <div class="first-content-video item5">
                                        <video id="my-player" class="video-js" muted loop autoplay preload="auto"
                                            poster="https://static-web.likeevideo.com/as/common-static/ads-home/videos/imo_cover5.png"
                                            data-setup="{}">
                                            <source
                                                src="https://static-web.bigolive.tv/as/common-static/ads-home/videos/Story_Stream5.mp4"
                                                type="video/mp4" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider
                                                upgrading to a web browser that
                                                <a href="https://videojs.com/html5-video-support/"
                                                    target="_blank">supports HTML5 video</a>
                                            </p>
                                        </video>
                                    </div>
                                    <img src="{{ asset('frontend/img/images/13.492c1d1.png') }}" class="img7"> </img>
                                    <div class="performance-box">
                                        <div class="s6w1" enKey="lang238">Story Stream</div>
                                        <div class=s6w2 enKey="lang239">
                                            Story stream ads appear when users browsing stories on imo,
                                            brand information will be shown right among them
                                        </div>
                                        <div class=line2> </div>
                                        <div class=s6w3 enKey="lang240">
                                            Naturally integrated with users’ stories, avoiding to bother users
                                            browsing experience</div>
                                        <div class=s6w5 enKey="lang241">
                                            Multiple ads formats supported, let brand creativity to trigger
                                            users’ interests
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div>
                            <div class="section6-box">
                                <div class="production6">
                                    <div class="first-content-video item6">
                                        <video id="my-player" class="video-js" muted loop autoplay preload="auto"
                                            poster="https://static-web.likeevideo.com/as/common-static/ads-home/videos/imo_cover6.png"
                                            data-setup="{}">
                                            <source
                                                src="https://static-web.bigolive.tv/as/common-static/ads-home/videos/Story_Feed5.mp4"
                                                type="video/mp4" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider
                                                upgrading to a web browser that
                                                <a href="https://videojs.com/html5-video-support/"
                                                    target="_blank">supports HTML5 video</a>
                                            </p>
                                        </video>
                                    </div>
                                    <img src="{{ asset('frontend/img/images/14.fd40f47.png') }}" class="img7"> </img>
                                    <div class="performance-box">
                                        <div class="s6w1" enKey="lang242">Story Feed</div>
                                        <div class=s6w2 enKey="lang243">
                                            Story feed ads catch the right chance to appear when users exit
                                            stories, it interstitial pops up seamlessly without interruption
                                        </div>
                                        <div class=line2> </div>
                                        <div class=s6w3 enKey="lang244">
                                            With visually engaging-full screen features, it shows up
                                            impressively</div>
                                        <div class=s6w5 enKey="lang245">
                                            Capture the users’ last attention, leave the important brand
                                            memory
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -----------------addition---------------------------- -->

        <div class="targeting-capabilities">
            <h1 style="text-align:center ;">Targeting Capabilities</h1>
            <div class="capabilities-container">
                <div class="capabilities-left-container">
                    <div class="capabilities-left-logo"><i class="fa-solid fa-location-dot fa-4x"></i></div>
                    <div class="capabilities-left-header1">GEO Targeting</div>
                    <div class="capabilities-left-content1">
                        <ul>
                            <li>Country</li>
                            <li>State</li>
                            <li>City</li>
                        </ul>
                    </div>
                    <div class="capabilities-left-header2">Device Targeting</div>
                    <div class="capabilities-left-content2">
                        <ul>
                            <li>Mobile Manufacturer</li>
                            <li>Operation System</li>
                        </ul>
                    </div>
                    <div class="capabilities-left-header3">Connection Targeting</div>
                    <div class="capabilities-left-content3">
                        <ul>
                            <li>Carrier</li>
                            <li>Network Type</li>
                        </ul>
                    </div>
                    <div class="capabilities-left-footer">Basic Target</div>
                </div>
                <div class="capabilities-right-container">
                    <div class="capabilities-right-logo"><i class="fa-solid fa-cart-shopping fa-4x"></i></div>
                    <div class="capabilities-right-header1">Hign-End Groups</div>
                    <div class="capabilities-right-content1">
                        <ul>
                            <li>High-End Device</li>
                            <li>IAP Purchase Behavior</li>
                        </ul>
                    </div>
                    <div class="capabilities-right-header2">NRB Groups</div>
                    <div class="capabilities-right-content2">
                        <ul>
                            <li>Works or Travel Abroad by targeting geos</li>
                        </ul>
                    </div>
                    <div class="capabilities-right-header3">Interested Group
                    </div>
                    <div class="capabilities-right-content3">
                        <ul>
                            <li>Ecommerce Users</li>
                            <li>Games</li>
                            <li>Music</li>
                            <li>Entertainment</li>
                            <li>etc.</li>
                        </ul>
                    </div>
                    <div class="capabilities-right-footer">Advance Target</div>
                </div>
            </div>
        </div>
        <div class="buying-opportunity">
            <h1 style="text-align:center ; padding-top: 40px;">Buying Opportunity</h1>
            <div class="buying-opportunity-container">
                <div class="buying-opportunity-left-container">
                    <div class="buying-opportunity-left-logo"><i class="fa-solid fa-cart-shopping fa-4x"></i></div>
                    <div class="buying-opportunity-left-header1">CPM</div>
                    <div class="buying-opportunity-left-content1">
                        <ul>
                            <li>Fixed ad slot</li>
                            <li>Targeting available</li>
                            <li>Guaranteed delivery</li>
                        </ul>
                    </div>
                    <div class="buying-opportunity-left-header2">CPC</div>
                    <div class="buying-opportunity-left-content2">
                        <ul>
                            <li>Fixed ad slot</li>
                            <li>Targeting available</li>
                            <li>Guaranteed delivery</li>
                        </ul>
                    </div>
                    <div class="buying-opportunity-left-header3">CPI</div>
                    <div class="buying-opportunity-left-content3">
                        <ul>
                            <li>Fixed ad slot</li>
                            <li>Targeting available</li>
                            <li>Guaranteed delivery</li>
                        </ul>
                    </div>
                    <div class="buying-opportunity-left-footer">Direct Ad Serving</div>
                </div>
                <div class="buying-opportunity-right-container">
                    <div class="buying-opportunity-right-logo"><i class="fa-solid fa-cart-shopping fa-4x"></i></div>
                    <div class="buying-opportunity-right-header1">CPT - Brand Takeover</div>
                    <div class="buying-opportunity-right-content1">
                        <ul>
                            <li>Cost per time</li>
                            <li>Fixed ad slot</li>
                            <li>To meet the demand for large exposure</li>
                        </ul>
                    </div>

                    <div class="buying-opportunity-right-footer">Direct Ad Serving</div>
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
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/img/Brand_logos/Imo/aci.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/img/Brand_logos/Imo/Anower.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/apex.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/arla.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/Basundhara.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/Berger.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/bl.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/daraz.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/emami.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/foodpanda.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/grameen.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/holcim.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/ipdc.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/macro.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/mgi.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/pran.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/reciket.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/Runner.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/samsung.jpg.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/shah.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/singer.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/tiktok.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/Toffe.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/tvs.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/Uni.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/upay.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/vivo.png') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/img/Brand_logos/Imo/walton.png') }}"
                            alt=""></div>
                </div>

            </div>
        </div>

        <!-- 最后一屏 -->
        <div class="section sixth-section">
            <div class="sixth-inner">
                <!-- lottie动画 -->
                <div class="sixth-content-lottie"></div>
                <h1 class="sixth-title">Let's go Big with IMO!</h1>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
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
