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
                    @foreach($projects as $key=>$row)
                    <a href="#" class="gallery-filter " data-filter=".{{$row->id}}">{{$row->title}}</a>
                    @endforeach
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
                    <!-- portfolio_item-->
                    @foreach($projects as $key=>$row)
                    <div class="portfolio_item {{$row->id}}">
                        <div class="grid-item-holder">
                            <img src="{{asset('backend/uploads/projects')}}/{{$row->photo}}" alt="">
                            <div class="grid-det">
                                <div class="grid-det_category"><a href="#">Architecture</a> <a href="#">Design</a>
                                </div>
                                <div class="grid-det-item">
                                    <a href="{{route('frontend.singleProject',[$row->id])}}" class="ajax grid-det_link">{{$row->title}} <i
                                            class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="pr-bg"></div>
                    </div>
                @endforeach
                    <!-- portfolio_item end-->
                </div>
                <!-- portfolio end -->
            </div>
            <!-- portfolio end -->
        </div>
        <!--column-wrap-->
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>
    </div>
@endsection
