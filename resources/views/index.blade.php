@extends('layouts.master')

@section('content')


    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="padding: 100px 0 !important;" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="title-heading mt-4">
                      <h1 class="heading mb-3">swift and affordable package <span
                                class="text-primary">Delivered</span>
                        </h1> 
                        </h1>
                        <p class="para-desc text-muted">we offer online vendors & small business owners the best waybill delivery to their customers</p>
                        <div class="mt-4">
                            <a href="tel:+2348122288404" class="btn btn-outline-primary mt-2"><i class="mdi mdi-phone"> </i> +234-8122-288-404</a>
                            <!-- <a href="https://apps.apple.com/ng/app/gaozim-request-a-carrier/id6449133794" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i>
                                App Store</a>
                            <a href="https://play.google.com/store/apps/details?id=com.gaozim.gaozim" class="btn btn-outline-primary mt-2"><i
                                    class="mdi mdi-google-play"></i> Play Store</a>-->
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="text-md-right text-center">
                        <img src=" {{asset('assets/images/app/landing1.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->
    <!-- Partners start -->
    <section class="py-4 " style="background:#f2fff5 !important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Features Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Why use us?</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">
                            
                            Let <span
                                class="text-primary font-weight-bold">Gaozim</span> handle your inter-city & inter-state waybill deliveries —
No stress and No fee</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div mt-4 pt-2 class="row">
                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <i data-feather="monitor" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Same-day Delivery</h4>
                                    <p class="text-muted para mb-0">We assign your parcel to our active carriers
                                        with same drop-off route.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <i data-feather="feather" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Instant Delivery</h4>
                                    <p class="text-muted para mb-0">Suprise your customers we express delivery with
                                        regular delivery pricing that won't scare them. </p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <i data-feather="eye" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Within City Delivery</h4>
                                    <p class="text-muted para mb-0">We have our carriers close to you to deliver
                                        your parcel instantly.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <i data-feather="user-check" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Intercity Delivery</h4>
                                    <p class="text-muted para mb-0">Connect with our carriers that are going to
                                        your drop-off location before the journey.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <i data-feather="smartphone" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Pick-up From shop</h4>
                                    <p class="text-muted para mb-0">You don't have to leave your shop, office, home to
                                        make intercity or within city delivery, we pick-up from your convinence and
                                        deliver to your customer.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Best Pricing</h4>
                                    <p class="text-muted para mb-0">Our pricing shows our commitment to connect you
                                        with your customers,friends and family.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-4 col-12 mt-4 pt-2 text-center text-md-right">
                    <img src="{{asset('assets/images/gaozim/lady_vendor.png')}}" class="img-fluid" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Feature End -->

    <!-- Showcase Start -->
    <section class="section pt-0 bg-light">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">How <span class="text-primary">Gaozim</span> Works</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Fulfill your desire of delivering parcel
                            to your cutomers instantly with 3 simple steps without leaving your convinence.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
                    <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="pills-cloud-tab" data-toggle="pill"
                                href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title font-weight-normal mb-0">Request a Carrier</h4>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->

                        <li class="nav-item">
                            <a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#pills-smart"
                                role="tab" aria-controls="pills-smart" aria-selected="false">
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title font-weight-normal mb-0">Instant pick-up</h4>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->

                        <li class="nav-item">
                            <a class="nav-link rounded" id="pills-apps-tab" data-toggle="pill" href="#pills-apps"
                                role="tab" aria-controls="pills-apps" aria-selected="false">
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title font-weight-normal mb-0">Confirm drop-off</h4>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
                    </ul>
                    <!--end nav pills-->
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel"
                            aria-labelledby="pills-cloud-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title">
                                        <h4 class="title mb-4"><i class="mdi mdi-chevron-double-right text-primary"></i>
                                            User friendly mobile App</h4>
                                        <p class="text-muted">download Gaozim light wieght mobile app in less than 2minutes and get started immediately.</p>
                                        <ul class="list-unstyled feature-list text-muted">
                                            <li><i data-feather="check-circle"
                                                    class="fea icon-sm text-success mr-2"></i>Signup or login to Gaozim app</li>
                                            <li><i data-feather="check-circle"
                                                    class="fea icon-sm text-success mr-2"></i>Click on request Carrier</li>
                                            <li><i data-feather="check-circle"
                                                    class="fea icon-sm text-success mr-2"></i>It take less than 5minutes to fill delivery and Item details.</li>
                                        </ul>
                                     
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-6">
                                    <img src="{{asset('assets/images/app/landing.png')}}" class="img-fluid mx-auto d-block" alt="">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title">
                                        <h4 class="title mb-4"><i class="mdi mdi-chevron-double-right text-primary"></i>
                                            Quick pick from you</h4>
                                        <p class="text-muted">Gaozim treat every client and item as special so expect instant pickup.</p>
                                        <ul class="list-unstyled feature-list text-muted">
                                            <li><i data-feather="check-circle"
                                                    class="fea icon-sm text-success mr-2"></i>Get a call from one of us to confirm location</li>
                                            <li><i data-feather="check-circle"
                                                    class="fea icon-sm text-success mr-2"></i>Give out item with special authentication</li>
                                            <li><i data-feather="check-circle"
                                                    class="fea icon-sm text-success mr-2"></i>Sit tight and track your item</li>
                                        </ul>
                                       
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-6">
                                    <img src="{{asset('assets/images/app/landing.png')}}" class="img-fluid mx-auto d-block" alt="">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                            <div class="row align-items-center">

                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title">
                                        <h4 class="title mb-4"><i class="mdi mdi-chevron-double-right text-primary"></i>
                                            Our delivery are all express</h4>
                                        <p class="text-muted">We ensure you won't loss your customers due to bad delivery service.</p>
                                        <ul class="list-unstyled feature-list text-muted">
                                            <li><i data-feather="check-circle"
                                                    class="fea icon-sm text-success mr-2"></i>We have an estimated delivery time</li>
                                            <li><i data-feather="check-circle"
                                                    class="fea icon-sm text-success mr-2"></i>We meet recipient at drop-off location</li>
                                            <li><i data-feather="check-circle"
                                                    class="fea icon-sm text-success mr-2"></i>Authenticate recipient and deliver</li>
                                        </ul>
                                      
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-6">
                                    <img src="{{asset('assets/images/app/landing.png')}}" class="img-fluid mx-auto d-block" alt="">
                                </div>
                                <!--end col-->

                            </div>
                            <!--end row-->
                        </div>
                        <!--end teb pane-->
                    </div>
                    <!--end tab content-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Showcase End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->


    <!-- Testi n Download cta start -->
    <section class="section pt-0">
        <div class="container">

            <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
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
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6 col-12 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title mr-lg-4">
                        <p class="text-primary h2 mb-3"><i class="uim uim-layer-group"></i></p>
                        <h4 class="title mb-3">Share in our amazing<br> <span class="text-primary">delivery experience
                                today!</span>
                        </h4>
                        <p class="text-muted">Be part of our independent carrier and be proud to connect and fulfill our
                            client's demand and earn daily for each delivery.</p>
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i data-feather="check-circle" class="fea icon-sm text-success mr-2"></i>Deliver parcel
                                with public transportation</li>
                            <li><i data-feather="check-circle" class="fea icon-sm text-success mr-2"></i>Earn more than &#8358;1,000
                                from each delivery cost</li>
                            <li><i data-feather="check-circle" class="fea icon-sm text-success mr-2"></i>Deliver parcel
                                when travelling intercity</li>
                        </ul>
                        <div class="watch-video mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2">
                                Become a Carrier</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-5 col-md-6 col-12 order-1 order-md-2">
                    <img src="{{asset('assets/images/app/landing.png')}}" class="img-fluid" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Testi n Download cta End -->


@endsection
