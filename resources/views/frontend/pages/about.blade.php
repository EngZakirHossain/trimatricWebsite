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
                <div class="bg" data-bg="{{asset('frontend/images/bg/21.jpg')}}"></div>
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>About Our<br> Company</h2>
                    <p>We look forward not only to seeking business opportunities but also to providing
                        innovative, unique and outstanding perspectives for the fulfillment of the
                        requirements of our client.</p>
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
                <!--section-->
                <section id="sec1" class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Our company story</h3>
                            <p>TRIMATRIC Architect and Engineers, established in the year 2007, is one of
                                the pioneer concerns in the field of creative solution providers in
                                residential and commercial design, capable of excellent imaginative ability
                                and professionalism. </p>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/bg/8.jpg')}}" class="respimg" alt="">
                                <a href="https://vimeo.com/56930191"
                                   class="column-wrap-media_btn color-bg image-popup">
                                    Our Story Video <i class="fas fa-play"></i>
                                    <div class="pr-bg pr-bg-white"></div>
                                </a>
                            </div>
                            <div class="column-wrap-text">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="pr-subtitle">
                                            Architecture Agency
                                            <div class="pr-bg pr-bg-white"></div>
                                        </h3>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <div style="text-align: left; font-size: 16px;"><b>Our Mission</b>
                                        </div>
                                        <p>" Our mission is to satisfy our valuable customers ensuring
                                            quality of products and service excellences at a reasonable
                                            price, respect the social norms & customs, contribute to the
                                            employment generation of the country, endeavor for constant
                                            enhancement of technical and professional skills of our people
                                            and contribute in our national economy. "</p>

                                        <div style="text-align: left; font-size: 16px;"><b>Our Vision</b>
                                        </div>
                                        <p>" Our vision is to nourish livable mind through heart touching
                                            unconventional design, create employment for our country people
                                            and leave a colorful & glorious ambiance for our next
                                            generation. "
                                        </p>

                                        <div style="text-align: left; font-size: 16px;"><b>Our
                                                Philosophy</b></div>
                                        <p>" Innovation we create, Excellence we believe”, Inspired by this
                                            moto, TRIMATRIC is always keenly devoted to bring out the
                                            ultimate satisfaction of our customers. With vision of
                                            sophisticated designs coupled with durable technical detailing,
                                            TRIMATRIC enjoys producing Spaces ranging from small scale
                                            retail extensions to Palatial Residences and exclusively 5-star
                                            Hospitality projects. We compose sensual spaces that inspires,
                                            engages, intuitively evokes a sense of place & timeless
                                            elegance. The purpose & Nature of the architecture may vary, but
                                            these visions remain constant to our philosophy. "
                                        </p>
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
                <!--section -->
                <section class="no-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inline-facts-container fl-wrap">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <!-- inline-facts -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="12">12</div>
                                                </div>
                                            </div>
                                            <h6>YEARS OF EXPERIENCE</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="150">150
                                                    </div>
                                                </div>
                                            </div>
                                            <h6>TEAM MEMBERS</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="225">225
                                                    </div>
                                                </div>
                                            </div>
                                            <h6>SATISFIED CLIENTS</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="35">35</div>
                                                </div>
                                            </div>
                                            <h6>RESIDENT PROJECTS</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="190">190
                                                    </div>
                                                </div>
                                            </div>
                                            <h6>COMMERCIAL PROJECTS</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                </div>
                            </div>
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
                            <h3>Our awesome team</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p> -->
                        </div>
                        <!-- team-box   -->
                        <div class="team-box">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="team-photo">
                                <div class="overlay"></div>
                                <img src="https://via.placeholder.com/800x530" alt="" class="respimg">
                                <ul class="team-social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                                <a href="#" class="team-contact_btn color-bg"><i
                                        class="fal fa-envelope"></i></a>
                            </div>
                            <div class="team-info">
                                <h3>Syed Mirshad</h3>
                                <h4>CEO / Architect</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <!-- team-box end -->
                        <!-- team-box   -->
                        <div class="team-box">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="team-photo">
                                <div class="overlay"></div>
                                <img src="https://via.placeholder.com/800x530" alt="" class="respimg">
                                <ul class="team-social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                                <a href="#" class="team-contact_btn color-bg"><i
                                        class="fal fa-envelope"></i></a>
                            </div>
                            <div class="team-info">
                                <h3>Syed Mirshad</h3>
                                <h4>Architect / Designer</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <!-- team-box end -->
                        <!-- team-box   -->
                        <div class="team-box">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="team-photo">
                                <div class="overlay"></div>
                                <img src="https://via.placeholder.com/800x530" alt="" class="respimg">
                                <ul class="team-social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                                <a href="#" class="team-contact_btn color-bg"><i
                                        class="fal fa-envelope"></i></a>
                            </div>
                            <div class="team-info">
                                <h3>Syed Mirshad</h3>
                                <h4>Architect / Designer</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <!-- team-box end -->
                        <!-- team-box   -->
                        <div class="team-box">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="team-photo">
                                <div class="overlay"></div>
                                <img src="https://via.placeholder.com/800x530" alt="" class="respimg">
                                <ul class="team-social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                                <a href="#" class="team-contact_btn color-bg"><i
                                        class="fal fa-envelope"></i></a>
                            </div>
                            <div class="team-info">
                                <h3>Syed Mirshad</h3>
                                <h4>Photographer / Designer</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <!-- team-box end -->
                        <div class="section-number right_sn">
                            <div class="pr-bg pr-bg-white"></div>
                            <span>0</span>2.
                        </div>
                    </div>
                </section>
                <!--section end-->
                <div class="section-separator"></div>
                <!--section-->
                <section id="sec5" class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Testimonials</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p> -->
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-text">
                                <div class="testilider fl-wrap" data-effects="slide">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img
                                                            src="https://via.placeholder.com/150" alt="">
                                                    </div>
                                                    <h3>Liza Mirovsky</h3>
                                                    <p>"There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration
                                                        in some form, by injected humour, or randomised
                                                        words which don't look even slightly believable."
                                                    </p>
                                                    <!-- <a href="#" class="teti-link" target="_blank">Via
                                                        Twitter</a> -->
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img
                                                            src="https://via.placeholder.com/150" alt="">
                                                    </div>
                                                    <h3>Andy Smith</h3>
                                                    <p>"There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration
                                                        in some form, by injected humour, or randomised
                                                        words which don't look even slightly believable."
                                                    </p>
                                                    <!-- <a href="#" class="teti-link" target="_blank">Via
                                                        Facebook</a> -->
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img
                                                            src="https://via.placeholder.com/150" alt="">
                                                    </div>
                                                    <h3>Gary Trust</h3>
                                                    <p>"There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration
                                                        in some form, by injected humour, or randomised
                                                        words which don't look even slightly believable."
                                                    </p>
                                                    <!-- <a href="#" class="teti-link" target="_blank">Via
                                                        Myspace</a> -->
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img
                                                            src="https://via.placeholder.com/150" alt="">
                                                    </div>
                                                    <h3>Centa Simpson</h3>
                                                    <p>"There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration
                                                        in some form, by injected humour, or randomised
                                                        words which don't look even slightly believable."
                                                    </p>
                                                    <!-- <a href="#" class="teti-link" target="_blank">Via
                                                        Facebook</a> -->
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                        </div>
                                        <div class="testilider-controls">
                                            <div class="tc-pagination"></div>
                                            <div class="ss-slider-btn ss-slider-prev color-bg"><i
                                                    class="fal fa-long-arrow-left"></i></div>
                                            <div class="ss-slider-btn ss-slider-next color-bg"><i
                                                    class="fal fa-long-arrow-right"></i></div>
                                        </div>
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
                <!--section-->
                <section id="sec5" class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Our Clients</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p> -->
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-text">
                                <div class="testilider fl-wrap" data-effects="slide">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper ">
                                            <!-- swiper-slide -->
                                            @foreach($clients as $key=>$row)
                                                <div class="swiper-slide">
                                                    <div class="testi-item fl-wrap" >
                                                       <img src="{{asset('backend/uploads/clients/')}}/{{$row->photo}}" alt="">
                                                    </div>
                                                </div>
                                                @endforeach
                                            <!-- swiper-slide end-->
                                        </div>
                                        <div class="testilider-controls">
                                            <div class="tc-pagination"></div>
                                            <div class="ss-slider-btn ss-slider-prev color-bg"><i
                                                    class="fal fa-long-arrow-left"></i></div>
                                            <div class="ss-slider-btn ss-slider-next color-bg"><i
                                                    class="fal fa-long-arrow-right"></i></div>
                                        </div>
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
            </div>
            <!--column-wrap-container end-->
        </div>
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>
    </div>
    @include('frontend.layouts.partials.footerContent')
@endsection

