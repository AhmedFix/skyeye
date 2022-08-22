@extends('layouts.app')

@section('content')

                <div class="container">
                    <div class="hero__wrapper">
                        <div class="row">
                            <div class="col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">
                                <div class="hero__title_inner">
                                    <a href="#"><img src="{{asset('front_assets/img/logo.png')}}" alt=""></a>
                                    <h1 class="hero__title">Coming Soon</h1>
                                    <p class="hero__text">Wait for us soon for a new start in the world for online learning.<br>and a broader vision of the concept of self Learning.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- countdown__module hide undefined -->
                        <div class="countdown__module hide" data-date="2022/11/10">
                            <p><span>%D</span> Days</p>
                            <p><span>%H</span> Hours</p>
                            <p><span>%M</span> Minutes</p>
                            <p><span>%S</span> Seconds</p>
                        </div><!-- End / countdown__module hide undefined -->
                        
                        <div class="service-wrapper">
                            
                            <!-- service -->
                            <div class="service">
                                <h2 class="service__title">Certificates</h2>
                                <p class="service__text">Through our website you can obtain certified Certificates in several fields</p>
                            </div><!-- End / service -->
                            
                            
                            <!-- service -->
                            <div class="service">
                                <h2 class="service__title">Courses</h2>
                                <p class="service__text">We provide you with a variety of courses that meet your passion</p>
                            </div><!-- End / service -->
                            
                            
                            <!-- service -->
                            <div class="service">
                                <h2 class="service__title">Consultants</h2>
                                <p class="service__text">With us you can make full advantage of Consultants</p>
                            </div><!-- End / service -->
                            
                        </div>
                    </div>
                </div>
            </div><!-- End / hero -->
            
        </div>
        <!-- End / Content-->
    </div>
   
@endsection
 