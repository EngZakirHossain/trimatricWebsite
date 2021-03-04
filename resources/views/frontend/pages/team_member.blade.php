@extends('frontend.layouts.master')

@section('content')
    <!--content-->
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
                <div class="bg" data-bg="{{asset('frontend/images/bg/19.jpg')}}"></div>
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>Andy Kowalsky<br>Architect</h2>
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
                <!--section-->
                <section id="sec1" class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3> About Myself</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-5"> <img src="{{asset('frontend/images/team/5.jpg')}}"  class="respimg" alt=""></div>
                                    <div class="col-md-7">
                                        <ul class="pr-list dark-bg pr-list-color">
                                            <li><span>Specialization </span> : Architect</li>
                                            <li><span>Date of Birth </span> : 27 may 1990</li>
                                            <li><span>Education </span> : New York University</li>
                                            <li><span>Hobby </span> :   Footbal , Traveling</li>
                                        </ul>
                                        <a href="portfolio.html" class="pr-view ajax">My Portfolio<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="column-wrap-text fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="pr-subtitle">
                                            Award Winning Architect And Designer
                                        </h3>
                                    </div>
                                    <div class="col-md-8">

                                        <p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
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
                <section   class="no-padding">
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
                                                    <div class="num" data-content="0" data-num="145">0</div>
                                                </div>
                                            </div>
                                            <h6>Finished projects</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="357">0</div>
                                                </div>
                                            </div>
                                            <h6>Happy customers</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="825">0</div>
                                                </div>
                                            </div>
                                            <h6>Working hours</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="15">0</div>
                                                </div>
                                            </div>
                                            <h6>Awards won</h6>
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
                            <h3>My Skills</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                        </div>
                        <div class="skillbar-box animaper">
                            <div class="pr-bg pr-bg-white"></div>
                            <!-- skill 1-->
                            <div class="custom-skillbar-title"><span>Photoshop</span></div>
                            <div class="skill-bar-percent">95%</div>
                            <div class="skillbar-bg" data-percent="95%">
                                <div class="custom-skillbar"></div>
                            </div>
                            <!-- skill 2-->
                            <div class="custom-skillbar-title"><span>Illustrator</span></div>
                            <div class="skill-bar-percent">65%</div>
                            <div class="skillbar-bg" data-percent="65%">
                                <div class="custom-skillbar"></div>
                            </div>
                            <!-- skill 3-->
                            <div class="custom-skillbar-title"><span>3D MAX</span></div>
                            <div class="skill-bar-percent">75%</div>
                            <div class="skillbar-bg" data-percent="75%">
                                <div class="custom-skillbar"></div>
                            </div>
                            <!-- skill 4-->
                            <div class="custom-skillbar-title"><span>Google ScketchUp</span></div>
                            <div class="skill-bar-percent">90%</div>
                            <div class="skillbar-bg" data-percent="90%">
                                <div class="custom-skillbar"></div>
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
                <section id="sec5" class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Testimonials</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
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
                                                    <div class="testi-avatar"><img src="{{asset('frontend/images/avatar/1.jpg')}}" alt=""></div>
                                                    <h3>Liza Mirovsky</h3>
                                                    <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over "</p>
                                                    <a href="#" class="teti-link" target="_blank">Via Twitter</a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img src="{{asset('frontend/images/avatar/2.jpg')}}" alt=""></div>
                                                    <h3>Andy Smith</h3>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="teti-link" target="_blank">Via Facebook</a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img src="{{asset('frontend/images/avatar/3.jpg')}}" alt=""></div>
                                                    <h3>Gary Trust</h3>
                                                    <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over "</p>
                                                    <a href="#" class="teti-link" target="_blank">Via Myspace</a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img src="{{asset('frontend/images/avatar/4.jpg')}}" alt=""></div>
                                                    <h3>Centa Simpson</h3>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="teti-link" target="_blank">Via Facebook</a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                        </div>
                                        <div class="testilider-controls">
                                            <div class="tc-pagination"></div>
                                            <div class="ss-slider-btn ss-slider-prev color-bg"><i class="fal fa-long-arrow-left"></i></div>
                                            <div class="ss-slider-btn ss-slider-next color-bg"><i class="fal fa-long-arrow-right"></i></div>
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
            </div>
            <!--column-wrap-container end-->
        </div>
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--content end -->
    @include('frontend.layouts.partials.footerContent')
@endsection
