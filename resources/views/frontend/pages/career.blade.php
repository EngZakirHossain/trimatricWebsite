@extends('frontend.layouts.master')

@section('content')
    <div class="content">
        <!--fixed-column-wrap-->
        <div class="fixed-column-wrap">
            <div class="pr-bg"></div>
            <!--fixed-column-wrap-content-->
            <div class="fixed-column-wrap-content">
                <div class="scroll-nav-wrap color-bg">
                    <div class="carnival">Scroll down</div>
                    <div class="snw-dec">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                    </div>
                </div>
                <div class="bg" data-bg="{{asset('frontend/images/bg/12.jpg')}}"></div>
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>Build Your<br> Carrer With Us</h2>
                    <p>Join us, we offer you an extraordinary chance to learn, to develop and to be part of an exciting experience and team.</p>
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
                            <h3>Join us and help disrupt the enterprise market!</h3>
                            <div class="parallax-header"> <a href="#">27 may 2018</a><span>Category : </span><a href="#">Branding</a> <a href="#">Video</a> </div>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="single-slider-wrap">
                                    <div class="single-slider fl-wrap">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper lightgallery">
                                                <div class="swiper-slide hov_zoom"><img src="{{asset('frontend/images/career/career.jpg')}}" alt=""><a href="{{asset('frontend/images/career/career.jpg')}}" class="box-media-zoom  popup-image"><i class="fal fa-search"></i></a></div>
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
                                    <div class="col-md-12">
                                        <div class="post-opt fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <ul>
                                                <li><a href="#"><i class="fal fa-user"></i> Andy Cooper</a></li>
                                                <li><a href="#"><i class="fal fa-comments-alt"></i> 12 comments</a></li>
                                                <li><span><i class="fal fa-eye"></i> 123 view</span></li>
                                            </ul>
                                        </div>
                                        <div class="pr-bg pr-bg-white"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                            Proin eu ultrices libero.
                                        </p>
                                        <!-- accordion-->
                                        <div class="accordion mar-top">
                                            <a class="toggle act-accordion" href="#"> Graphics Designer <span></span></a>
                                            <div class="accordion-inner visible">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                <span>Address: </span>
                                                <span>Deadline: </span>
                                            </div>
                                            <a class="toggle" href="#"> Engineer <span></span></a>
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                            </div>
                                            <a class="toggle" href="#"> Details option 3  <span></span></a>
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                            </div>

                                        </div>
                                        <!-- accordion end -->
                                    </div>
                                </div>
                            </div>
                            <!-- post-author-->
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
                <section id="sec2" class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Submit Your CV Here</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p>
                        </div>
                        <div id="contact-form">
                            <div class="pr-bg pr-bg-white"></div>
                            <div id="message"></div>
                            <form class="custom-form" action="{{route('frontend.cv.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" id="name" placeholder="Your Name *" required=""/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="phone" id="phone" placeholder="Phone *"  required=""/>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="email" name="email" id="email" placeholder="Email Address *" required=""/>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="position" id="position" placeholder="Job Title *"  required="">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea id="description" name="description" cols="40" rows="3" placeholder="Tell Us About Yourself : (optional)"></textarea>
                                        </div>
                                        <div class="col-md-12 " style="text-align: left; margin-top: 20px">
                                            <label for="exampleFormControlFile1">Upload Your CV: </label><br>
                                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required="">
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <button class="btn float-btn flat-btn color-bg" type="submit" id="submit">Submit
                                        <i class="fal fa-long-arrow-right"></i>
                                    </button>
                                    @if (Session::has('message'))
                                        <div class="alert alert-success">
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif
                                </fieldset>
                            </form>
                        </div>
                        <!-- contact form  end-->
                        <div class="section-number right_sn">
                            <div class="pr-bg pr-bg-white"></div>
                            <span>0</span>2.
                        </div>
                    </div>
                </section>
                <!--section end-->
            </div>
            <!--column-wrap-container end-->
        </div>
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>

    </div>
    @include('frontend.layouts.partials.footerContent')
@endsection
