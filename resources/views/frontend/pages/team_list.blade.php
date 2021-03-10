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
                <div class="bg" data-bg="{{asset('frontend/images/bg/12.jpg')}}')}}"></div>
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>Our Awesome<br> Team Member</h2>
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
            <!--column-wrap-container -->
            <div class="column-wrap-container fl-wrap">
                <div class="col-wc_dec">
                    <div class="pr-bg pr-bg-white"></div>
                </div>
                <div class="col-wc_dec col-wc_dec2">
                    <div class="pr-bg pr-bg-white"></div>
                </div>
                <!--section-->
                <section id="sec2" class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Our awesome team</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                neque. Nulla finibus lobortis pulvinar. </p> -->
                        </div>
                        @php
                            $teams = \App\Team::all();
                        @endphp
                        <div class="row">
                            <div class="col-md-12">
                            @foreach($teams as $key=>$row)
                            <!-- team-box   -->
                                <div class="team-box">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <div class="team-photo">
                                        <div class="overlay"></div>
                                        <img src="{{asset('/storage/uploads/teams')}}/{{$row->photo}}" alt="" class="respimg">
                                        <a href="mailto::{{$row->email}}" class="team-contact_btn color-bg">
                                            <i class="fal fa-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="team-info">
                                        <h3><a href="{{route('frontend.team-member',($row->name))}}">{{$row->name}}</a></h3>
                                        <h4>{{$row->designation}}</h4>
                                        <h4>{{$row->department}}</h4>
                                        <p>{!! \Illuminate\Support\Str::limit($row->description, 100)  !!}</p>
                                    </div>
                                </div>
                                <!-- team-box end -->
                            @endforeach
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
                <section class="no-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>Project Execution Team</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inline-facts-container fl-wrap">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <!-- inline-facts -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="02">02</div>
                                                </div>
                                            </div>
                                            <h6>Driver</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="50">50
                                                    </div>
                                                </div>
                                            </div>
                                            <h6>Carpenter</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="30">30
                                                    </div>
                                                </div>
                                            </div>
                                            <h6>Carpenter Assistant</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="10">10</div>
                                                </div>
                                            </div>
                                            <h6>Electrician</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="05">05
                                                    </div>
                                                </div>
                                            </div>
                                            <h6>Plumber</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="05">05
                                                    </div>
                                                </div>
                                            </div>
                                            <h6>Cleaner</h6>
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
            </div>
            <!--column-wrap-container end-->
        </div>
        <!--column-wrap end-->
        <div class="limit-box fl-wrap"></div>

    </div>
    <!--content end -->
    @include('frontend.layouts.partials.footerContent')
@endsection
