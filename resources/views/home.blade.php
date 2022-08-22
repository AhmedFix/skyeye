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
                                <h2 class="service__title">Web Development</h2>
                                <p class="service__text">Curabitur elementum urna augue, eu porta purus gravida in. Cras consectetur, lor</p>
                            </div><!-- End / service -->
                            
                            
                            <!-- service -->
                            <div class="service">
                                <h2 class="service__title">App Mobile Design</h2>
                                <p class="service__text">Suspendisse ac elit vitae est lacinia interdum eu sit amet mauris. Phasellus ali</p>
                            </div><!-- End / service -->
                            
                            
                            <!-- service -->
                            <div class="service">
                                <h2 class="service__title">Cloud Security</h2>
                                <p class="service__text">Duis porttitor libero ac egestas euismod. Maecenas quis felis turpis. Nulla quis</p>
                            </div><!-- End / service -->
                            
                        </div>
                    </div>
                </div>
            </div><!-- End / hero -->
            
        </div>
        <!-- End / Content-->
    </div>
   
@endsection
 