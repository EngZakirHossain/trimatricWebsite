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
            <div class="bg" data-bg="{{asset('frontend/images/bg/20.jpg')}}"></div>
            <div class="overlay"></div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <!--fixed-column-wrap_title-->
            <div class="fixed-column-wrap_title first-tile_load">
                <h2>Our<br> Project</h2>
                <p>All Our Working Project .</p>
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
                <a href="#" class="gallery-filter gallery-filter-active" data-filter="*">All</a>
                    <a href="#" class="gallery-filter " data-filter=".CORPORATE">CORPORATE</a>
                    <a href="#" class="gallery-filter " data-filter=".EDUCATIONAL">EDUCATIONAL</a>
                    <a href="#" class="gallery-filter " data-filter=".HOSPITALITY">HOSPITALITY</a>
                    <a href="#" class="gallery-filter " data-filter=".RELIGIOUS">RELIGIOUS</a>
                    <a href="#" class="gallery-filter " data-filter=".EXTERIOR">EXTERIOR</a>
                    <a href="#" class="gallery-filter " data-filter=".INTERIOR">INTERIOR</a>
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
            @foreach($projects as $key=>$row)
            <div class="gallery-item interior {{$row->cat_name}}">
                <div class="grid-item-holder">
                    <img src="{{asset('uploads/projects')}}/{{$row->photo}}" alt="">
                    <div class="grid-det">
                        <div class="grid-det_category"><a href="#">Architecture</a> <a
                                href="#">Design</a></div>

                        <div class="grid-det-item">
                                <a href="{{route('frontend.singleProject',[Crypt::encrypt($row->id)])}}" class="ajax grid-det_link">{{$row->title}} <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pr-bg"></div>
            </div>
            @endforeach
        <!-- gallery-item end-->
        </div>
        <!-- portfolio end -->
    </div>
    <!--column-wrap end-->
    <div class="limit-box fl-wrap"></div>
</div>

@endsection
