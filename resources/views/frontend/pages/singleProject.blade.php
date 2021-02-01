@extends('frontend.layouts.master')

@section('content')
    <div class="content">
        <!-- flat-project_title -->
        <div class="flat-project_title fl-wrap dark-bg">
            <div class="hero-canvas-wrap fs-canvas first-tile_load">
                <div class="dots gallery__dots" data-dots=""></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="pr-bg"></div>
                        <h2>{{$projects->title}} <br> </h2>
                    </div>
                    <div class="col-md-4 first-tile_load">
                        <span class="flat-project_title_dec color-bg"></span>
                        <div class="clearfix"></div>
                        <p>{{$projects->description}} </p>
                        <a href="#sec2" class="flat-project_title_link custom-scroll-link">Details <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- flat-project_title end-->
        <!-- fw-carousel-wrap -->
        <div class="fw-carousel-wrap show-case-slider-wrap dark-bg fl-wrap">
            <!-- fw-carousel  -->
            <div class="fw-carousel  fs-gallery-wrap fl-wrap full-height lightgallery"
                 data-mousecontrol="0">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide hov_zoom">
                            <img src="{{asset('backend/uploads/projects')}}/{{$projects->photo}}" alt="">
                            <a href="{{asset('backend/uploads/projects')}}/{{$projects->photo}}" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="pr-bg"></div>
                        </div>
                    @php
                        $portfolio = \App\Portfolio::where('project_id',$projects->id)->get();
                    @endphp
                        <!-- swiper-slide-->
                        @foreach($portfolio as $pro)
                        <div class="swiper-slide hov_zoom">
                                <img src="{{asset('backend/uploads/projects')}}/{{$pro->photo}}" alt="">
                                <a href="{{asset('backend/uploads/projects')}}/{{$pro->photo}}" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>
                                <div class="pr-bg"></div>
                        </div>
                            @endforeach
                        <!-- swiper-slide end-->
                    </div>
                </div>
            </div>
            <!-- fw-carousel end -->
        </div>
        <!-- fw-carousel-wrap end -->
        <!-- fw-carousel-control -->
        <div class="fw-carousel-control dark-bg fl-wrap">
            <div class="fw-carousel-control_container">
                <div class="fw-carousel-counter"></div>
                <div class="fw_cb fw-carousel-button-next"><i class="fal fa-long-arrow-right"></i></div>
                <div class="fw_cb fw-carousel-button-prev"><i class="fal fa-long-arrow-left"></i></div>
            </div>
            <div class="half-scrollbar">
                <div class="hs_init"></div>
            </div>
        </div>
        <!-- fw-carousel-control end -->
        <!-- section-->
        <section class="no-padding-bottom" id="sec2">
            <!-- container-->
            <div class="container">
                <!-- det-wrap-->
                <div class="fl-wrap det-wrap">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="fixed-column fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="pr-title">
                                    Project Details
                                    <span>{{$projects->description}}.</span>
                                </div>
                                <ul class="pr-list dark-bg">
                                    <li><span>Date :</span>{{$projects->project_start}} </li>
                                    <li><span>Client :</span> {{$projects->title}} </li>
                                    <li><span>Status :</span> {{$projects->status}} </li>
                                    <li><span>Location : </span> <a href="#"> {{$projects->project_address}} </a></li>
                                </ul>
                                <div class="fixed-column-top"><i class="fal fa-long-arrow-up"></i></div>
                            </div>
                        </div>
                        <div class="col-md-8 first-tile_load">

                            <!-- tabs-container-->
                            <div id="tabs-container">
                                <div class="tabs-counter">
                                    <span>0</span>
                                    <div class="tc_item">1</div>
                                </div>
                                <ul class="tabs-menu fl-wrap">
                                    <li class="selectedLava"><a href="#tab-1"
                                                                data-tabnum="1"><span>01.</span>Details</a></li>
                                    <li><a href="#tab-2" data-tabnum="2"><span>02.</span>Video
                                            Presentation</a></li>
                                    <li><a href="#tab-3" data-tabnum="3"><span>03.</span>Plans</a></li>
                                </ul>
                                <!-- tab-content-->
                                <div id="tab-1" class="tab-content">
                                    <h3 class="pr-subtitle"> Project Info</h3>
                                    <p>{{$projects->title}}
                                    </p>
                                    <h3 class="pr-subtitle mar-top"> Project Brief</h3>
                                    <!-- accordion-->
                                    <div class="accordion mar-top">
                                        <a class="toggle act-accordion" href="#"> Details option
                                            <span></span></a>
                                        <div class="accordion-inner visible">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
                                                Donec a consectetur nulla. Nulla posuere sapien vitae lectus
                                                suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.
                                                Curabitur convallis fringilla diam sed aliquam. Sed tempor
                                                iaculis massa faucibus feugiat. In fermentum facilisis
                                                massa, a consequat purus viverra.</p>
                                        </div>
                                        <a class="toggle" href="#"> Details option 2 <span></span></a>
                                        <div class="accordion-inner">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
                                                Donec a consectetur nulla. Nulla posuere sapien vitae lectus
                                                suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.
                                                Curabitur convallis fringilla diam sed aliquam. Sed tempor
                                                iaculis massa faucibus feugiat. In fermentum facilisis
                                                massa, a consequat purus viverra.</p>
                                        </div>
                                        <a class="toggle" href="#"> Details option 3 <span></span></a>
                                        <div class="accordion-inner">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
                                                Donec a consectetur nulla. Nulla posuere sapien vitae lectus
                                                suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.
                                                Curabitur convallis fringilla diam sed aliquam. Sed tempor
                                                iaculis massa faucibus feugiat. In fermentum facilisis
                                                massa, a consequat purus viverra.</p>
                                        </div>
                                    </div>
                                    <!-- accordion end -->
                                    </div>
                                <!-- tab-content end-->
                                <!-- tab-content-->
                                <div id="tab-2" class="tab-content">
                                    <h3 class="pr-subtitle"> Project Presentation.</h3>
                                    <p> An eros argumentum vel, elit diceret duo eu, quo et aliquid ornatus
                                        delicatissimi. Cu nam tale ferri utroque, eu habemus albucius mel,
                                        cu vidit possit ornatus eum. Eu ius postulant salutatus
                                        definitionem, explicari. Graeci viderer qui ut, at habeo facer solet
                                        usu. Pri choro pertinax indoctum ne, ad partiendo persecuti
                                        forensibus est.</p>
                                    <div class="video-box fl-wrap">
                                        <img src="{{asset('fronted/images/all/7.jpg')}}" class="respimg" alt="">
                                        <a class="video-box-btn image-popup"
                                           href="https://vimeo.com/34741214"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <!-- tab-content end-->
                                <!-- tab-content-->
                                <div id="tab-3" class="tab-content">
                                    <h3 class="pr-subtitle">Plan and sketches of the project.</h3>
                                    <div class="palns-gal fl-wrap lightgallery">
                                        <!-- plans-gal_item-->
                                        <div class="plans-gal_item hov_zoom">
                                            <img src="{{asset('frontend/images/all/1.jpg')}}" alt="" class="respimg">
                                            <a href="{{asset('frontend/images/all/1.jpg')}}"
                                               class="box-media-zoom   popup-image"><i
                                                    class="fal fa-search"></i></a>
                                        </div>
                                        <!-- plans-gal_item end-->
                                        <!-- plans-gal_item-->
                                        <div class="plans-gal_item hov_zoom">
                                            <img src="{{asset('frontend/images/all/3.jpg')}}" alt="" class="respimg">
                                            <a href="{{asset('frontend/images/all/3.jpg')}}"
                                               class="box-media-zoom   popup-image"><i
                                                    class="fal fa-search"></i></a>
                                        </div>
                                        <!-- plans-gal_item end-->
                                        <!-- plans-gal_item-->
                                        <div class="plans-gal_item hov_zoom">
                                            <img src="{{asset('frontend/images/all/4.jpg')}}" alt="" class="respimg">
                                            <a href="{{asset('frontend/images/all/4.jpg')}}"
                                               class="box-media-zoom   popup-image"><i
                                                    class="fal fa-search"></i></a>
                                        </div>
                                        <!-- plans-gal_item end-->
                                    </div>
                                </div>
                                <!-- tab-content end-->
                            </div>
                            <!-- tabs-container end-->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- det-wrap end-->
            </div>
            <!-- container end -->
            <div class="clearfix"></div>
            <div class="limit-box fl-wrap"></div>
            <!--content-nav_holder-->
            <div class="content-nav_holder fl-wrap first-tile_load">
                <div class="container">
                    <div class="content-nav">
                        <ul>
                            <li>
                                <a href="#" class="ln ajax"><i
                                        class="fal fa-long-arrow-left"></i><span>Prev - Project
                                                    </span></a>
                                <div class="content-nav_mediatooltip cnmd_leftside"><img
                                        src="images/folio/4.jpg" alt=""></div>
                            </li>
                            <li>
                                <a href="{{route('frontend.project')}}" class="ajax list-folio_nav">
                                    <span></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="rn ajax"><span>Next - Project
                                                    </span> <i class="fal fa-long-arrow-right"></i></a>
                                <div class="content-nav_mediatooltip cnmd_rightside"><img
                                        src="images/folio/5.jpg" alt=""></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- content-nav_holder end-->
        </section>
        <!-- section end-->
    </div>

    @include('frontend.layouts.partials.footerContent')
@endsection

