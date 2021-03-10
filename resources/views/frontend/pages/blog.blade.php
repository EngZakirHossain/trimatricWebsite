@extends('frontend.layouts.master')

@section('content')
    <!--content-->
    <div class="content">
        <!--fixed-column-wrap-->
        <div class="fixed-column-wrap">
            <!--fixed-column-wrap-content-->
            <div class="pr-bg"></div>
            <div class="fixed-column-wrap-content">
                <div class="scroll-nav-wrap color-bg">
                    <div class="carnival">Scroll down</div>
                    <div class="snw-dec">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                    </div>
                </div>
                <div class="bg" data-bg="{{asset('frontend/images/bg/11.jpg')}}"></div>
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>Our last<br> News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                </div>
                <!--fixed-column-wrap_title end-->
                <div class="fixed-column-dec"></div>
            </div>
            <!--fixed-column-wrap-content end-->
        </div>
        <!--fixed-column-wrap end-->
        <!--column-wrap-->
        <div class="column-wrap">
            <!--column-wrap-container -->
            <div class="column-wrap-container fl-wrap">
                <div class="col-wc_dec">
                    <div class="pr-bg pr-bg-white"></div>
                </div>
                <div class="col-wc_dec col-wc_dec2">
                    <div class="pr-bg pr-bg-white"></div>
                </div>
                <section  class="small-padding article">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3> <a href="{{route('frontend.blog_view')}}" class="ajax">Blog Post Title</a></h3>
                            <div class="parallax-header"> <a href="#">27 may 2018</a><span>Category : </span><a href="#">Branding</a> <a href="#">Video</a> </div>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="single-slider-wrap">
                                    <div class="single-slider fl-wrap">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper lightgallery">
                                                <div class="swiper-slide hov_zoom"><img src="{{asset('frontend/images/all/5.jpg')}}" alt=""><a href="{{asset('frontend/images/all/5.jpg')}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                <div class="swiper-slide hov_zoom"><img src="{{asset('frontend/images/all/1.jpg')}}" alt=""><a href="{{asset('frontend/images/all/1.jpg')}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                <div class="swiper-slide hov_zoom"><img src="{{asset('frontend/images/all/3.jpg')}}" alt=""><a href="{{asset('frontend/images/all/3.jpg')}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ss-slider-controls">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <div class="ss-slider-pagination"></div>
                                        <div class="ss-slider-cont ss-slider-cont-prev color-bg"><i class="fal fa-long-arrow-left"></i></div>
                                        <div class="ss-slider-cont ss-slider-cont-next color-bg"><i class="fal fa-long-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-wrap-text">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="post-opt fl-wrap">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-user"></i> Andy Cooper</a></li>
                                                <li><a href="#"><i class="fal fa-comments-alt"></i> 12 comments</a></li>
                                                <li><span><i class="fal fa-eye"></i> 123 view</span></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                        <a href="{{route('frontend.blog_view')}}" class="pr-view ajax">Read more<i class="fal fa-long-arrow-right"></i></a>
                                        <div class="pr-bg pr-bg-white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-number right_sn">
                            <div class="pr-bg pr-bg-white"></div>
                            <span>0</span>1.
                        </div>
                    </div>
                </section>
                <!--section end-->
                <div class="section-separator"></div>
                <!--section-->
                <section  class="small-padding article">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3> <a href="{{route('frontend.blog_view')}}" class="ajax">Blog Post Title</a></h3>
                            <div class="parallax-header"> <a href="#">27 may 2018</a><span>Category : </span><a href="#">Branding</a> <a href="#">Video</a> </div>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/all/1.jpg')}}"  class="respimg" alt="">
                            </div>
                            <div class="column-wrap-text">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <div class="post-opt fl-wrap">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-user"></i> Andy Cooper</a></li>
                                                <li><a href="#"><i class="fal fa-comments-alt"></i> 12 comments</a></li>
                                                <li><span><i class="fal fa-eye"></i> 123 view</span></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                        <a href="{{route('frontend.blog_view')}}" class="pr-view ajax">Read more<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-number right_sn">
                            <div class="pr-bg pr-bg-white"></div>
                            <span>0</span>2.
                        </div>
                    </div>
                </section>
                <!--section end-->
                <div class="section-separator"></div>
                <!--section-->
                <section  class="small-padding article">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3> <a href="{{route('frontend.blog_view')}}" class="ajax">Blog Post Title</a></h3>
                            <div class="parallax-header"> <a href="#">27 may 2018</a><span>Category : </span><a href="#">Branding</a> <a href="#">Video</a> </div>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/all/6.jpg')}}"  class="respimg" alt="">
                            </div>
                            <div class="column-wrap-text">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <div class="post-opt fl-wrap">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-user"></i> Andy Cooper</a></li>
                                                <li><a href="#"><i class="fal fa-comments-alt"></i> 12 comments</a></li>
                                                <li><span><i class="fal fa-eye"></i> 123 view</span></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                        <a href="{{route('frontend.blog_view')}}" class="pr-view ajax">Read more<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-number right_sn">
                            <div class="pr-bg pr-bg-white"></div>
                            <span>0</span>3.
                        </div>
                    </div>
                </section>
                <!--section end-->
                <div class="section-separator"></div>
                <!--section-->
                <section  class="small-padding article">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3> <a href="{{route('frontend.blog_view')}}" class="ajax">Blog Post Title</a></h3>
                            <div class="parallax-header"> <a href="#">27 may 2018</a><span>Category : </span><a href="#">Branding</a> <a href="#">Video</a> </div>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/all/7.jpg')}}"  class="respimg" alt="">
                            </div>
                            <div class="column-wrap-text">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <div class="post-opt fl-wrap">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-user"></i> Andy Cooper</a></li>
                                                <li><a href="#"><i class="fal fa-comments-alt"></i> 12 comments</a></li>
                                                <li><span><i class="fal fa-eye"></i> 123 view</span></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                        <a href="{{route('frontend.blog_view')}}" class="pr-view ajax">Read more<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-number right_sn">
                            <div class="pr-bg pr-bg-white"></div>
                            <span>0</span>4.
                        </div>
                    </div>
                </section>
                <!--section end-->
                <!--pagination-->
                <div class="pagination">
                    <div class="pr-bg pr-bg-white"></div>
                    <div class="container">
                        <a href="#" class="prevposts-link"><i class="fal fa-long-arrow-left"></i></a>
                        <a href="#">01.</a>
                        <a href="#" class="current-page">02.</a>
                        <a href="#">03.</a>
                        <a href="#">04.</a>
                        <a href="#" class="nextposts-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!--pagination end-->
            </div>
            <!--column-wrap-container end-->
        </div>
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--content end -->
    @include('frontend.layouts.partials.footerContent')
@endsection
