@extends('layouts.master')

@section('content')
 
        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100">
            <div class="container">
                <div class="row align-items-center">
                   
                    
                    <div class="col-lg-6 col-md-7">
                        <div class="title-heading mt-4">
                            <h1 class="display-4 font-weight-normal mb-3">Start earning from delivering in any <span
                                class="text-primary">city right now</span></h1>
                            <p class="para-desc text-muted">Gaozim has thousands of vendor order listing daily</p>
                             <div class="mt-4">
                                 <a href="https://apps.apple.com/ng/app/gaozim-carrier/id6470171025" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i>
                                App Store</a>
                            <a href="https://play.google.com/store/apps/details?id=com.carrier.gaozim_carrier" class="btn btn-outline-primary mt-2"><i
                                    class="mdi mdi-google-play"></i> Play Store</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                     <div class="col-lg-6 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="text-md-right text-center">
                        <img src=" {{asset('assets/images/app/landing.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                </div><!--end row-->
            </div><!--end container--> 
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-light">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Features Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">How it works</h4>
                            <p class="text-muted para-desc mx-auto mb-0">You don't need to own any asset or mobility to start earning from delivery on <span class="text-primary font-weight-bold">Gaozim</span> . all you need is your smart phone.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="ride-image1 position-relative">
                                <img src="{{asset('assets/images/gaozim/collect.png')}}" class="avatar avatar-ex-large shadow" alt="">
                            </div>
                            <div class="content mt-5 pt-3">
                                <h4 class="title-2"><a href="javascript:void(0)" class="text-dark">Accept Order</a></h4>
                                <p class="text-muted mb-0">From the list of orders, Carrier accept orders that the Pickup and drop-off location aligns with your current route.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="ride-image1">
                                <img src="{{asset('assets/images/gaozim/pickup.png')}}" class="avatar avatar-ex-large shadow" alt="">
                            </div>
                            <div class="content mt-5 pt-3">
                                <h4 class="title-2"><a href="javascript:void(0)" class="text-dark">Pickup Item</a></h4>
                                <p class="text-muted mb-0">Carrier proceeds immediately to pickup item from vendor or client</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="ride-image1">
                                <img src="{{asset('assets/images/gaozim/Messenger-bro.png')}}" class="avatar avatar-ex-large shadow" alt="">
                            </div>
                            <div class="content mt-5 pt-3">
                                <h4 class="title-2"><a href="javascript:void(0)" class="text-dark">Take to destination</a></h4>
                                <p class="text-muted mb-0">Carries takes item to the reciever within an estimated time</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Features End -->

        <!-- Ride Request Start -->
        <section class="section">
          

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Why Gaozim?</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Everyone is happy with <span class="text-primary font-weight-bold">Gaozim</span> for providing any easy way to earn daily.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool fea"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                            
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Support system</h4>
                                <p class="text-muted mb-0">Together with our robust insurance system we full cover every delivery.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool fea"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                            
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Earn money</h4>
                                <p class="text-muted mb-0">Earn up to &#8358;35,000 daily when delivering with Gaozim.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool fea"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                            
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Start when you want</h4>
                                <p class="text-muted mb-0">You are not under presure to deliver item, start whenever you want.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool fea"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                            
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Get paid daily</h4>
                                <p class="text-muted mb-0">Get paid at the end of every gig, the end of the day or recieve payment once a month.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                             <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool fea"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                            
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">No deduction</h4>
                                <p class="text-muted mb-0">What you see on your screen is what you will receive as your earning.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mdi mdi-home"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                            
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Deliver anywhere</h4>
                                <p class="text-muted mb-0">Unlimited access to delivery orders, within the city or when travelling outside the city.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">What our carrier says!</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Gaozim</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center mt-4">
                    <div class="col-lg-8 col-12">
                        <div id="single-owl" class="owl-carousel owl-theme">
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="{{asset('assets/images/gaozim/pickup.png')}}" class="img-fluid" alt="">
                                    </div><!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Thomas Israel <small class="text-muted d-block">Carrier</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" You can never runout of cash with Gaozim, I use public transportation to deliver all my orders and make extra money"</p>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <!-- Review End -->
                            
                         
                            
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="{{asset('assets/images/gaozim/pickup.png')}}" class="img-fluid" alt="">
                                    </div><!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Dean Tolle <small class="text-muted d-block">Carrier</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" It is fun how I make over &#8358;5,000 everytime I travel outside my city."</p>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <!-- Review End -->
                        </div><!--end owl-fade-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-light">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Ride Request End -->

        <!-- App Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Have Question ?</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Gaozim</span> that can provide everything you need to earn at easy.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="row">
                        <div class="col-md-6 col-12 mt-4 pt-2">
                            <div class="media">
                                <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Do I need to own a bike or any mobility ?</h5>
                                    <p class="answer text-muted mb-0">NO, you are allowed to use public transportation to pickup and deliver item to customers either within city or travelling outside city.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 col-12 mt-4 pt-2">
                            <div class="media">
                                <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                                <div class="media-body">
                                    <h5 class="mt-0"> Can I work in any city I want to ?</h5>
                                    <p class="answer text-muted mb-0">Yes, Gaozim allow you to login and get started, No need to check for city. We currently operate with our carrier in every city in Nigeria.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 col-12 mt-4 pt-2">
                            <div class="media">
                                <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                                <div class="media-body">
                                    <h5 class="mt-0"> What do I need to become a carrier ?</h5>
                                    <p class="answer text-muted mb-0">All you need is a smart phone and you have access to endless posibility.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 col-12 mt-4 pt-2">
                            <div class="media">
                                <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                                <div class="media-body">
                                    <h5 class="mt-0"> Is <span class="text-primary">Gaozim</span> safe ?</h5>
                                    <p class="answer text-muted mb-0">Yes, your safety is our first priority. We provide guidelines on how to pickup and deliver items and together with our insurance partners we have every delivery full covered.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end row-->

                <div class="row mt-5 pt-lg-3 justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                               <h4 class="title mb-4">Get the Carrier App now !</h4>
                                <p class="text-muted para-desc mx-auto">Start making money <span
                                class="text-primary font-weight-bold">Gaozim</span> carrier app, deliver package and get paid instantly.</p>
                                 <div class="mt-4">
                              
                                
                                  <a href="https://apps.apple.com/ng/app/gaozim-carrier/id6470171025" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i>
                                App Store</a>
                            <a href="https://play.google.com/store/apps/details?id=com.carrier.gaozim_carrier" class="btn btn-outline-primary mt-2"><i
                                    class="mdi mdi-google-play"></i> Play Store</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end contanainer-->
        </section><!--end section-->

@endsection
