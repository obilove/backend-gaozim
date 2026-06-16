@extends('layouts.master')

@section('content')
 <!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> About Gaozim </h4>

                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">Gaozim</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->


        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <i class="uil uil-briefcase"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Our Vision</h5>
                                <p class="para text-muted mb-0">It is a long established fact that a reader will be of a page reader will be of at its layout.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <i class="uil uil-rocket"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Our Mission</h5>
                                <p class="para text-muted mb-0">It is a long established fact that a reader will be of a page reader will be of at its layout.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <i class="uil uil-crosshairs"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Our Goal</h5>
                                <p class="para text-muted mb-0">It is a long established fact that a reader will be of a page reader will be of at its layout.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 mt-4 pt-2">
                        <img src="{{asset('assets/images/app/home.png')}}" alt="">
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 pt-2">
                        <div class="section-title ml-lg-5">
                            <h4 class="title mb-4">Health Insurance</h4>
                            <p class="text-muted">You can combine all the Gaozim templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                            <ul class="list-unstyled feature-list text-muted">
                                <li><i data-feather="check-circle" class="fea icon-sm text-success mr-2"></i>Digital Marketing Solutions for Tomorrow</li>
                                <li><i data-feather="check-circle" class="fea icon-sm text-success mr-2"></i>Our Talented & Experienced Marketing Agency</li>
                                <li><i data-feather="check-circle" class="fea icon-sm text-success mr-2"></i>Create your own skin to match your brand</li>
                            </ul>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 mt-4 pt-2 order-1 order-md-2">
                        <img src="{{asset('assets/images/app/home.png')}}" alt="">
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 pt-2 order-2 order-md-1">
                        <div class="section-title mr-lg-5">
                            <h4 class="title mb-4">Investment Plans</h4>
                            <p class="text-muted">You can combine all the Gaozim templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                            <ul class="list-unstyled feature-list text-muted">
                                <li><i data-feather="check-circle" class="fea icon-sm text-success mr-2"></i>Digital Marketing Solutions for Tomorrow</li>
                                <li><i data-feather="check-circle" class="fea icon-sm text-success mr-2"></i>Our Talented & Experienced Marketing Agency</li>
                                <li><i data-feather="check-circle" class="fea icon-sm text-success mr-2"></i>Create your own skin to match your brand</li>
                            </ul>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->



            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Our Customers</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Gaozim</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-12 mt-4">
                        <div id="customer-testi" class="owl-carousel owl-theme">
                            <div class="media customer-testi m-2">
                                <img src="{{asset('assets/images/app/home.png')}}" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                </div>
                            </div>
                            
                            <div class="media customer-testi m-2">
                                <img src="{{asset('assets/images/app/home.png')}}" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                </div>
                            </div>

                            <div class="media customer-testi m-2">
                                <img src="images/client/03.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                </div>
                            </div>

                            <div class="media customer-testi m-2">
                                <img src="images/client/04.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                </div>
                            </div>

                            <div class="media customer-testi m-2">
                                <img src="images/client/05.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                </div>
                            </div>

                            <div class="media customer-testi m-2">
                                <img src="images/client/06.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->


            <div class="container mt-100 mt-60">
              

                <div class="row mt-5 pt-md-4 justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                            <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Gaozim</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            <a href="page-contact-two.html" class="btn btn-primary mt-4"><i class="mdi mdi-phone"></i> Contact us</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

@endsection
