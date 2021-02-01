@extends('frontend.layouts.master')

@section('content')
        <div class="content">
                <!--filter-panel -->
                <div class="fixed-filter-panel top_fix-filter top-element in-filter_mobpanel">
                    <div class="pr-bg"></div>
                    <div class="fixed-filter-panel_title color-bg">
                        Works Filter <i class="fal fa-long-arrow-right"></i>
                    </div>

                    <div class="gallery-filters">
                        <a href="#" class="gallery-filter gallery-filter-active" data-filter="*">All</a>
                        <a href="#" class="gallery-filter " data-filter=".CORPORATE">CORPORATE</a>
                        <a href="#" class="gallery-filter " data-filter=".EDUCATIONAL">EDUCATIONAL</a>
                        <a href="#" class="gallery-filter " data-filter=".HOSPITALITY">HOSPITALITY</a>
                        <a href="#" class="gallery-filter " data-filter=".RELIGIOUS">RELIGIOUS</a>
                        <a href="#" class="gallery-filter " data-filter=".EXTERIOR">EXTERIOR</a>
                        <a href="#" class="gallery-filter " data-filter=".INTERIOR">INTERIOR</a>
                        <a href="#" class="gallery-filter " data-filter=".RESIDENTIAL">RESIDENTIAL</a>
                        <div class="folio-counter">
                        <div class="num-album"></div>
                        <div class="all-album"></div>
                    </div>
                    <div class="scroll-down-wrap">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll or Swipe</span>
                    </div>
                </div>
                <!--filter-panel end-->
                <!-- portfolio start -->
                <div class="horizontal-grid-wrap  fl-wrap  ">
                    <!-- portfolio start -->
                    <div id="portfolio_horizontal_container" class="three-ver-columns">
                        @foreach( $portfolios as $key=>$row)
                            <!-- portfolio_item-->
                                <div class="portfolio_item {{$row->cat_name}} ">
                                    <div class="grid-item-holder">
                                        <img src="{{asset('backend/uploads/projects')}}/{{$row->photo}}" alt="">
                                    </div>
                                    <div class="pr-bg"></div>
                                </div>
                                <!-- portfolio_item end-->
                        @endforeach
                    </div>
                    <!-- portfolio end -->
                </div>
                <!-- portfolio end -->
            </div>
            <!--column-wrap-->
            <!--column-wrap end-->
            <div class="limit-box fl-wrap"></div>
        </div>
{{--    @include('frontend.layouts.partials.footerContent')--}}
@endsection
