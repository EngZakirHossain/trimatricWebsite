@extends('frontend.layouts.master')

@section('content')
    <div class="content">
        <!--fixed-column-wrap-->
        <div class="fixed-column-wrap">
            <div class="pr-bg"></div>
            <div class="fixed-column-wrap-content map-mobile">
                <div class="scroll-nav-wrap color-bg">
                    <div class="carnival">Scroll down</div>
                    <div class="snw-dec">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                    </div>
                </div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <div class="map-container mc_big">
                    <div id="map-single" class="map" data-latlog="[23.74701, 90.40830]"
                         data-popuptext="We work in Moghbazar . <br> We are waiting for your visit"></div>
                </div>
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
                            <h3> CONTACT US</h3>
                            <p>For any query, feel free to contact with us.</p>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{asset('frontend/images/contactus1920x1080.jpg')}}" class="respimg" alt="">
                                <div class="cont-det-wrap dark-bg">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <ul>
                                        <li><span>Call:</span><a href="#">+8802-9330743</a></li>
                                        <li><span>Write :</span><a href="#">info@trimatric.com</a></li>
                                        <li><span>Find us : </span><a href="#">125 Mezonet Building, Ramna
                                                Century
                                                Avenue, Boro Moghbazar, Dhaka 1217</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="section-number right_sn"><span>0</span>1.</div>
                    </div>
                </section>
                <!--section end-->
                <div class="section-separator"></div>
                <!--section-->
                <section id="sec2" class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Get In touch</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p> -->
                        </div>
                        <div id="contact-form">
                            <div class="pr-bg pr-bg-white"></div>
                            <div id="message"></div>
                            <form class="custom-form" action="{{route('contact.store')}}" method="post">
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" id="name" placeholder="Your Name *"/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="phone" id="phone" placeholder="Phone *" />
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="email" id="email" placeholder="Email Address *"/>
                                        </div>
                                       <div class="col-md-12">
                                           <input type="text" name="subject" id="subject" placeholder="subject *" >
                                       </div>
                                    </div>
                                    <textarea name="message" id="message" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                    <div class="clearfix"></div>
                                    <button class="btn float-btn flat-btn color-bg" type="submit" id="submit">Send Message
                                        <i class="fal fa-long-arrow-right"></i></button>
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
