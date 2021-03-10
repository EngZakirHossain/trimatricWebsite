@extends('frontend.layouts.master')

@section('content')
    <!--content-->
    <div class="content">
{{--        @php--}}
{{--            use App\Team;--}}
{{--            $team_member = Team::where('team_id', $team_members->id)->get();--}}
{{--        @endphp--}}

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
                    <h2>{{$team_members->name}}<br>{{$team_members->designation}}</h2>
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
                            <h3> About {{$team_members->name}}</h3>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-5"> <img src="{{asset('storage/uploads/teams')}}/{{$team_members->photo}}"  class="respimg" alt=""></div>
                                    <div class="col-md-7">
                                        <ul class="pr-list dark-bg pr-list-color">
                                            <li><span>Name </span> : {{$team_members->name}}</li>
                                            <li><span>Email </span> : <a href="mailto:{{$team_members->email}}">{{$team_members->email}}</a></li>
                                            <li><span>Specialization </span> : {{$team_members->designation}}</li>
                                            <li><span>Department </span> : {{$team_members->department}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column-wrap-text fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="pr-subtitle">
                                            {{$team_members->award_title}}
                                        </h3>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$team_members->description}}</p>
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
                <section id="sec5" class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Testimonials</h3>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-text">
                                <div class="testilider fl-wrap" data-effects="slide">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                        @php
                                            $testimonials = \App\Testimonial::orderBy('id','desc')->get();
                                        @endphp
                                        @foreach($testimonials as $key=>$row)
                                            <!-- swiper-slide -->
                                                <div class="swiper-slide">
                                                    <div class="testi-item fl-wrap">
                                                        <div class="testi-avatar"><img
                                                                src="{{asset('storage/uploads/testimonial')}}/{{$row->photo}}" alt="">
                                                        </div>
                                                        <h3>{{$row->name}}</h3>
                                                        <p>"{{$row->description}}"</p>
                                                    </div>
                                                </div>
                                                <!-- swiper-slide end-->
                                            @endforeach
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
    <!--content end -->
    @include('frontend.layouts.partials.footerContent')
@endsection
