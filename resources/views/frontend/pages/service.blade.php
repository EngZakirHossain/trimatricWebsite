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
                    <h2>Our<br> Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                        Nulla finibus lobortis pulvinar.</p>
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
                <section class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3><a href="#">Architecture</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/Architecture.jpg')}}" class="respimg" alt="">
                                <div class="cont-det-wrap dark-bg">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <ul>
                                        <li><span>Project Name :</span><a href="#">EPIC Garments</a></li>
                                        <li><span>ARCHITECT Name :</span><a href="#">Syed Mirshad</a></li>
                                        <li><span>SIZE :</span><a href="#">10000 Square Feet</a></li>
                                        <li><span>TIME :</span><a href="#">60 Days</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="serv-text fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu
                                            ultrices libero. Curabitur vulputate vestibulum elementum.
                                            Suspendisse id neque a nibh mollis blandit. Quisque varius eros
                                            ac purus dignissim.
                                            Proin eu ultrices libero. Curabitur vulputate vestibulum
                                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque
                                            varius eros ac purus dignissim.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="serv-price-wrap dark-bg"><span>Status</span>Complete
                                        </div>
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
                <section class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Interior Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/interior.jpg')}}" class="respimg" alt="">
                                <div class="cont-det-wrap dark-bg">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <ul>
                                        <li><span>Project Name :</span><a href="#">Rupayan Swapno Niloy</a></li>
                                        <li><span>ARCHITECT Name :</span><a href="#">Syed Mirshad</a></li>
                                        <li><span>SIZE :</span><a href="#">10000 Square Feet</a></li>
                                        <li><span>TIME :</span><a href="#">60 Days</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="serv-text fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu
                                            ultrices libero. Curabitur vulputate vestibulum elementum.
                                            Suspendisse id neque a nibh mollis blandit. Quisque varius eros
                                            ac purus dignissim.
                                            Proin eu ultrices libero. Curabitur vulputate vestibulum
                                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque
                                            varius eros ac purus dignissim.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="serv-price-wrap dark-bg"><span>Status</span>Ongoing
                                        </div>
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
                <section class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Exterior Design </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/Exterior.jpg')}}" class="respimg" alt="">
                                <div class="cont-det-wrap dark-bg">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <ul>
                                        <li><span>Project Name :</span><a href="#">Chattogram Software Technology Park </a></li>
                                        <li><span>ARCHITECT Name :</span><a href="#">Syed Mirshad</a></li>
                                        <li><span>SIZE :</span><a href="#">10000 Square Feet</a></li>
                                        <li><span>TIME :</span><a href="#">60 Days</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="serv-text fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu
                                            ultrices libero. Curabitur vulputate vestibulum elementum.
                                            Suspendisse id neque a nibh mollis blandit. Quisque varius eros
                                            ac purus dignissim.
                                            Proin eu ultrices libero. Curabitur vulputate vestibulum
                                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque
                                            varius eros ac purus dignissim.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="serv-price-wrap dark-bg"><span>Status</span>Ongoing
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
                <section class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Design Consultancy</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/design-consultancy.jpg')}}" class="respimg" alt="">
                                <div class="cont-det-wrap dark-bg">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <ul>
                                        <li><span>Project Name :</span><a href="#">EPIC Garments</a></li>
                                        <li><span>ARCHITECT Name :</span><a href="#">Syed Mirshad</a></li>
                                        <li><span>SIZE :</span><a href="#">10000 Square Feet</a></li>
                                        <li><span>TIME :</span><a href="#">60 Days</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="serv-text fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu
                                            ultrices libero. Curabitur vulputate vestibulum elementum.
                                            Suspendisse id neque a nibh mollis blandit. Quisque varius eros
                                            ac purus dignissim.
                                            Proin eu ultrices libero. Curabitur vulputate vestibulum
                                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque
                                            varius eros ac purus dignissim.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="serv-price-wrap dark-bg"><span>Status</span>Ongoing
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

                <!--section-->
                <section class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Custom Furniture</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/Furniture.jpg')}}" class="respimg" alt="">
                                <div class="cont-det-wrap dark-bg">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <ul>
                                        <li><span>Project Name :</span><a href="#">Rupayan Swapno Niloy </a></li>
                                        <li><span>ARCHITECT Name :</span><a href="#">Syed Mirshad</a></li>
                                        <li><span>SIZE :</span><a href="#">10000 Square Feet</a></li>
                                        <li><span>TIME :</span><a href="#">60 Days</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="serv-text fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu
                                            ultrices libero. Curabitur vulputate vestibulum elementum.
                                            Suspendisse id neque a nibh mollis blandit. Quisque varius eros
                                            ac purus dignissim.
                                            Proin eu ultrices libero. Curabitur vulputate vestibulum
                                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque
                                            varius eros ac purus dignissim.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="serv-price-wrap dark-bg"><span>Status</span>Ongoing
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-number right_sn">
                            <div class="pr-bg pr-bg-white"></div>
                            <span>0</span>5.
                        </div>
                    </div>
                </section>
                <!--section end-->

                <!--section-->
                <section class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Landscaping</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/Landscaping.jpg')}}" class="respimg" alt="">
                                <div class="cont-det-wrap dark-bg">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <ul>
                                        <li><span>Project Name :</span><a href="#">Silver Jubliee Bhaban, Rangpur </a></li>
                                        <li><span>ARCHITECT Name :</span><a href="#">Syed Mirshad</a></li>
                                        <li><span>SIZE :</span><a href="#">10000 Square Feet</a></li>
                                        <li><span>TIME :</span><a href="#">60 Days</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="serv-text fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu
                                            ultrices libero. Curabitur vulputate vestibulum elementum.
                                            Suspendisse id neque a nibh mollis blandit. Quisque varius eros
                                            ac purus dignissim.
                                            Proin eu ultrices libero. Curabitur vulputate vestibulum
                                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque
                                            varius eros ac purus dignissim.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="serv-price-wrap dark-bg"><span>Status</span>Ongoing
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-number right_sn">
                            <div class="pr-bg pr-bg-white"></div>
                            <span>0</span>7.
                        </div>
                    </div>
                </section>
                <!--section end-->

                <div class="section-separator"></div>
                <div class="clearfix"></div>
                <div class="container">
                    <div class="order-wrap dark-bg fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h4>Ready to order Your Project ? </h4>
                        <a href="{{route('frontend.contact')}}" class="ajax">Get In Touch <i
                                class="fal fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <!--column-wrap-container end-->
        </div>
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>
    </div>
    @include('frontend.layouts.partials.footerContent')
@endsection

