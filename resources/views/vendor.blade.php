@extends('layouts.master')

@section('content')
 
        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100" style="padding: 100px 0 !important;" id="vendor">
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-lg-6 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="text-md-right text-center">
                        <img src=" {{asset('assets/images/app/landing.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                    
                    <div class="col-lg-6 col-md-7">
                        <div class="title-heading mt-4">
                            <h1 class="display-4 font-weight-normal mb-3">Send or receive your package <span
                                class="text-primary">faster, secured and cheaper</span></h1>
                            <p class="para-desc text-muted">Have fun delivering or waybilling your products to your customer with Gaozim app.</p>
                            <div class="mt-4 pt-2">
                                  <a href="https://apps.apple.com/ng/app/gaozim-request-a-carrier/id6449133794" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i>
                                App Store</a>
                            <a href="https://play.google.com/store/apps/details?id=com.gaozim.gaozim" class="btn btn-outline-primary mt-2"><i
                                    class="mdi mdi-google-play"></i> Play Store</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container--> 
    
      </section>
 <!-- Features Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">How it works</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Fulfill your desire of delivering parcel
                            to your cutomers instantly with 3 simple steps without leaving your convinence.</p>
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
                                <h4 class="title-2"><a href="javascript:void(0)" class="text-dark">Request a carrier</a></h4>
                                <p class="text-muted mb-0">It takes just few minutes to fill delivery inforrmation on gaozim app and send your request</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="features text-center">
                            <div class="ride-image1">
                                <img src="{{asset('assets/images/gaozim/pickup.png')}}" class="avatar avatar-ex-large shadow" alt="">
                            </div>
                            <div class="content mt-5 pt-3">
                                <h4 class="title-2"><a href="javascript:void(0)" class="text-dark">Carrier pickup Item</a></h4>
                                <p class="text-muted mb-0">Our express Carrier contact you and pickup product from your pickup location.</p>
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
                                <p class="text-muted mb-0">Product is instanly transported to the recipient. </p>
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
       
 <section class="section bg-light">
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">What our customer says!</h4>
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
                                        <img src="images/client/01.jpg" class="img-fluid" alt="">
                                    </div><!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Thomas Israel <small class="text-muted d-block">Driver</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" It seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <!-- Review End -->
                            
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/02.jpg" class="img-fluid" alt="">
                                    </div><!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Barbara McIntosh <small class="text-muted d-block">User</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" This seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <!-- Review End -->
                            
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/03.jpg" class="img-fluid" alt="">
                                    </div><!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Christa Smith <small class="text-muted d-block">Passenger</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" I seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <!-- Review End -->
                            
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/04.jpg" class="img-fluid" alt="">
                                    </div><!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Carl Oliver <small class="text-muted d-block">Driver</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" Fully seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <!-- Review End -->
                            
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/05.jpg" class="img-fluid" alt="">
                                    </div><!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Jill Webb <small class="text-muted d-block">Passenger</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" There seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <!-- Review End -->
                            
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/06.jpg" class="img-fluid" alt="">
                                    </div><!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Dean Tolle <small class="text-muted d-block">User</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" It seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
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
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Gaozim</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="row">
                        <div class="col-md-6 col-12 mt-4 pt-2">
                            <div class="media">
                                <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">How our <span class="text-primary">Gaozim</span> work ?</h5>
                                    <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 col-12 mt-4 pt-2">
                            <div class="media">
                                <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                                <div class="media-body">
                                    <h5 class="mt-0"> What is the main process open account ?</h5>
                                    <p class="answer text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 col-12 mt-4 pt-2">
                            <div class="media">
                                <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                                <div class="media-body">
                                    <h5 class="mt-0"> How to make unlimited data entry ?</h5>
                                    <p class="answer text-muted mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 col-12 mt-4 pt-2">
                            <div class="media">
                                <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                                <div class="media-body">
                                    <h5 class="mt-0"> Is <span class="text-primary">Gaozim</span> safer to use with my account ?</h5>
                                    <p class="answer text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
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
