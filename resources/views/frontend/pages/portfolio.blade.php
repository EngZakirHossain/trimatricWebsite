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
                <div class="bg" data-bg="images/bg/13.jpg"></div>
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>Our<br> Portfolio</h2>
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
        <div class="column-wrap dark-bg">
            <!--filter-panel -->
            <div class="fixed-filter-panel top_fix-filter top-element in-filter_mobpanel">
                <div class="pr-bg"></div>
                <div class="fixed-filter-panel_title color-bg">
                    Works Filter <i class="fal fa-long-arrow-right"></i>
                </div>
                <div class="gallery-filters">
                    <a href="#" class="gallery-filter gallery-filter-active" data-filter="*">All Works</a>
                    <a href="#" class="gallery-filter " data-filter=".houses">Houses</a>
                    <a href="#" class="gallery-filter" data-filter=".apartments">Apartments</a>
                    <a href="#" class="gallery-filter" data-filter=".interior">Interior</a>
                    <a href="#" class="gallery-filter" data-filter=".design">Design</a>
                </div>
                <div class="folio-counter">
                    <div class="num-album"></div>
                    <div class="all-album"></div>
                </div>
            </div>
            <!--filter-panel end-->
            <!-- portfolio start -->
            <div class="gallery-items min-pad   three-column fl-wrap">
                <!-- gallery-item-->
                <div class="gallery-item interior design">
                    <div class="grid-item-holder">
                        <img src="images/folio/1.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Norway House <i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item apartments design">
                    <div class="grid-item-holder">
                        <img src="images/folio/2.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Theatre de Stoep
                                    <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item gallery-item-second interior design">
                    <div class="grid-item-holder">
                        <img src="images/folio/8.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Trinity River
                                    Audubon Centre<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item houses  interior ">
                    <div class="grid-item-holder">
                        <img src="images/folio/4.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">New Acropolis
                                    Museum<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item apartments">
                    <div class="grid-item-holder">
                        <img src="images/folio/5.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">West 57th Street
                                    <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item houses interior ">
                    <div class="grid-item-holder">
                        <img src="images/folio/6.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Petronas Tower<i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item apartments">
                    <div class="grid-item-holder">
                        <img src="images/folio/7.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">One World Trade
                                    Center <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item interior ">
                    <div class="grid-item-holder">
                        <img src="images/folio/3.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Spire Edge <i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item apartments design">
                    <div class="grid-item-holder">
                        <img src="images/folio/9.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">White Walls <i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item interior houses ">
                    <div class="grid-item-holder">
                        <img src="images/folio/10.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Big House<i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item houses design">
                    <div class="grid-item-holder">
                        <img src="images/folio/13.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Pen Tower <i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item houses design">
                    <div class="grid-item-holder">
                        <img src="images/folio/14.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Pen Tower <i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item houses apartments">
                    <div class="grid-item-holder">
                        <img src="images/folio/15.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Pen Tower <i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item houses gallery-item-second">
                    <div class="grid-item-holder">
                        <img src="images/folio/17.jpg" alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a
                                    href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Wood River Ships
                                    Center <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
            </div>
            <!-- portfolio end -->
        </div>
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>
    </div>
    @include('frontend.layouts.partials.footerContent')
@endsection
