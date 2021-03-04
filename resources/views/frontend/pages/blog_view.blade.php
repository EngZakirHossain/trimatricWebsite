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
                <div class="bg" data-bg="{{asset('frontend/images/bg/18.jpg')}}"></div>
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
                            <h3> Blog Post Title</h3>
                            <div class="parallax-header"> <a href="#">27 may 2018</a><span>Category : </span><a href="#">Branding</a> <a href="#">Video</a> </div>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="single-slider-wrap">
                                    <div class="single-slider fl-wrap">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper lightgallery">
                                                <div class="swiper-slide hov_zoom"><img src="{{asset('frontend/images/all/8.jpg')}}" alt=""><a href="{{asset('frontend/images/all/5.jpg')}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
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
                                            Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                        </p>
                                        <blockquote>
                                            <p> Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.Cras lacinia magna vel molestie faucibus.   </p>
                                        </blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                            Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                        </p>
                                        <p>Quisque varius eros ac purus dignissim.
                                            Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- post-author-->
                            <div class="post-author fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="author-img">
                                    <img alt='' src="{{asset('frontend/images/avatar/1.jpg')}}">
                                </div>
                                <div class="author-content">
                                    <h5><a href="#">Jane Kowalski</a></h5>
                                    <p>At one extremity the rope was unstranded, and the separate spread yarns were all braided and woven round the socket of the harpoon; the pole was then driven hard up into the socket; from the lower end the rope was traced half-way along the pole�s length, and firmly secured so, with intertwistings of twine.</p>
                                    <div class="author-social">
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--post-author end-->
                            <div  class="single-post-comm fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <!--title-->
                                <h6 id="comments-title">Comments<span>( 2 )</span></h6>
                                <ul class="commentlist clearafix">
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt='' src='{{asset('frontend/images/avatar/2.jpg')}}' width="50" height="50">
                                            </div>
                                            <cite class="fn"><a href="#">Kevin</a></cite>
                                            <div class="comment-meta">
                                                <h6><a href="#">January 02, 2014 at 07:39 am</a> / <a class='comment-reply-link' href="#">Reply</a></h6>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <!--comment body-->
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt='' src='{{asset('frontend/images/avatar/1.jpg')}}' width="50" height="50">
                                            </div>
                                            <cite class="fn"><a href="#">Andy</a></cite>
                                            <div class="comment-meta">
                                                <h6><a href="#">January 22, 2014 at 03:19 am</a> / <a class='comment-reply-link' href="#">Reply</a></h6>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div id="respond" class="clearafix fl-wrap">
                                    <h6 id="reply-title">Leave A Review</h6>
                                    <div class="comment-reply-form clearfix">
                                        <form id="add-comment" class="add-comment custom-form">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Your Name *" value=""/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Email Address*" value=""/>
                                                    </div>
                                                </div>
                                                <textarea cols="40" rows="3" placeholder="Your Comment:"></textarea>
                                            </fieldset>
                                            <button class="btn float-btn flat-btn color-bg" id="submit">Send Message <i class="fal fa-long-arrow-right"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!--end respond-->
                            </div>
                            <!--comments end -->
                            <div class="content-nav_holder fl-wrap blog-nav">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="content-nav">
                                    <ul>
                                        <li>
                                            <a href="{{route('frontend.blog_view')}}" class="ln ajax"><i class="fal fa-long-arrow-left"></i><span>Prev - Post Title</span></a>
                                            <div class="content-nav_mediatooltip cnmd_leftside"><img  src="{{asset('frontend/images/folio/4.jpg')}}"   alt=""></div>
                                        </li>
                                        <li>
                                            <a href="{{route('frontend.blog')}}" class="ajax list-folio_nav">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('frontend.blog_view')}}" class="rn ajax"><span >Next - Post Title</span> <i class="fal fa-long-arrow-right"></i></a>
                                            <div class="content-nav_mediatooltip cnmd_rightside"><img  src="{{asset('frontend/images/folio/5.jpg')}}"   alt=""></div>
                                        </li>
                                    </ul>
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
            </div>
            <!--column-wrap-container end-->
        </div>
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--content end -->
    @include('frontend.layouts.partials.footerContent')
@endsection
