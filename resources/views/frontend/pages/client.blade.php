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
                <div class="bg" data-bg="{{asset('frontend/images/bg/12.jpg')}}')}}"></div>
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
            <div class="gallery-items min-pad   two-column fl-wrap">
                @foreach($clients as $key=>$row)
                <!-- gallery-item-->
                <div class="gallery-item interior design">
                    <div class="grid-item-holder">
                        <img  src="{{asset('uploads/clients')}}/{{$row->photo}}"  alt="">
                        <div class="grid-det">
                            <div class="grid-det_category"><a href="#">Architecture</a> <a href="#">Design</a></div>
                            <div class="grid-det-item">
                                <a href="portfolio-single.html" class="ajax grid-det_link">Norway House <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-bg"></div>
                </div>
                <!-- gallery-item end-->
                @endforeach
            </div>
        </div>
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>

    </div>
    @include('frontend.layouts.partials.footerContent')
@endsection
