@extends('frontend.layouts.app')

@section('title', __('Contact'))

@section('content')


    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-20 pt-md-14 pb-md-23 text-center">
            <div class="row">
                <div class="col-xl-5 mx-auto mb-6">
                    <h1 class="display-1 mb-3">@lang('About Us')</h1>
                    <p class="lead mb-0">Kerdzebi.ge®@lang('about.A company turning ideas into beautiful products')</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row text-center mb-12 mb-md-15">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-n18 mt-md-n22">
                    <figure><img class="w-auto" src="{{ asset('frontend/assets/img/illustrations/i8.png') }}"
                            srcset="{{ asset('frontend/assets/img/illustrations/i8@2x.png 2x') }}" alt=""></figure>
                </div>
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <ul class="progress-list">
                        <li>
                            <p>Marketing</p>
                            <div class="progressbar line blue" data-value="100"></div>
                        </li>
                        <li>
                            <p>Strategy</p>
                            <div class="progressbar line green" data-value="80"></div>
                        </li>
                        <li>
                            <p>Development</p>
                            <div class="progressbar line yellow" data-value="85"></div>
                        </li>
                        <li>
                            <p>Data Analysis</p>
                            <div class="progressbar line orange" data-value="90"></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h3 class="display-5 mb-5">@lang('about.What do we offer')?</h3>
                    <p>@lang('about.What do we offer_text')</p>
                </div>
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-6 gy-md-0 text-center">
                <div class="col-md-6 col-lg-3">
                    <img src="{{ asset('frontend/assets/img/icons/lineal/megaphone.svg') }}"
                        class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="">
                    <h4>Marketing</h4>
                    <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida
                        at eget metus. Cras justo cum sociis natoque magnis.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <img src="{{ asset('frontend/assets/img/icons/lineal/target.svg') }}"
                        class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="">
                    <h4>Strategy</h4>
                    <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida
                        at eget metus. Cras justo cum sociis natoque magnis.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <img src="{{ asset('frontend/assets/img/icons/lineal/settings-3.svg') }}"
                        class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="">
                    <h4>Development</h4>
                    <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida
                        at eget metus. Cras justo cum sociis natoque magnis.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <img src="{{ asset('frontend/assets/img/icons/lineal/bar-chart.svg') }}"
                        class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="">
                    <h4>Data Analysis</h4>
                    <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida
                        at eget metus. Cras justo cum sociis natoque magnis.</p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- /section -->
    <section class="wrapper bg-gray">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-16 align-items-center">
                <div class="col-lg-7">
                    <figure><img class="w-auto" src="{{ asset('frontend/assets/img/illustrations/i3.png') }}"
                            srcset="{{ asset('frontend/assets/img/illustrations/i3@2x.png 2x') }}" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-15 text-uppercase text-line text-primary mb-3">How It Works?</h2>
                    <h3 class="display-5 mb-7 pe-xxl-5">Everything you need on creating a business process.</h3>
                    <div class="d-flex flex-row mb-4">
                        <div>
                            <img src="{{ asset('frontend/assets/img/icons/lineal/light-bulb.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-blue me-4" alt="">
                        </div>
                        <div>
                            <h4 class="mb-1">Collect Ideas</h4>
                            <p class="mb-1">Nulla vitae elit libero pharetra augue dapibus.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-4">
                        <div>
                            <img src="assets/img/icons/lineal/pie-chart-2.svg"
                                class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="">
                        </div>
                        <div>
                            <h4 class="mb-1">Data Analysis</h4>
                            <p class="mb-1">Vivamus sagittis lacus augue laoreet vel.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <img src="assets/img/icons/lineal/design.svg"
                                class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="">
                        </div>
                        <div>
                            <h4 class="mb-1">Magic Touch</h4>
                            <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-7 order-lg-2">
                    <figure><img class="w-auto" src="{{ asset('frontend/assets/img/illustrations/i2.png') }}"
                            srcset="{{ asset('frontend/assets/img/illustrations/i2@2x.png 2x') }}" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-15 text-uppercase text-line text-primary mb-3">Why Choose Us?</h2>
                    <h3 class="display-5 mb-7">A few reasons why our valued customers choose us.</h3>
                    <div class="accordion accordion-wrapper" id="accordionExample">
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingOne">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne"> Professional Design </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                        massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum.
                                        Praesent commodo cursus magna, vel.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingTwo">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo"> Top-Notch Support </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                        massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum.
                                        Praesent commodo cursus magna, vel.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingThree">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree"> Header and Slider Options </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                        massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum.
                                        Praesent commodo cursus magna, vel.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                    </div>
                    <!--/.accordion -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-4">
                    <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">@lang('Our Clients')</h2>
                    <h3 class="display-5 mb-5">@lang('about.They use our QR menu product')</h3>
                </div>
                <div class="col-lg-8">
                    <div class="carousel owl-carousel text-center" data-margin="30" data-dots="true" data-autoplay="false"
                        data-autoplay-timeout="5000"
                        data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                        @foreach ($clients as $item)
                            <div class="item">
                                <a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer">
                                    <img class="rounded-circle w-20 mx-auto mb-4"
                                        src="{{ asset('uploads/clients/' . $item->image) }}"
                                        srcset="assets/img/avatars/t2@2x.jpg 2x" alt="">
                                    <h4 class="mb-1">{{ $item->name }}</h4>
                                </a>
                                {{-- <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                </nav> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->

    <!-- section -->
    {{-- <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <h2 class="fs-15 text-uppercase text-muted mb-3">@lang('Our Clients')</h2>
            <div class="row gx-lg-8 mb-10 gy-5">
                <div class="col-lg-12">
                    <h3 class="display-5 mb-0">@lang('about.They use our QR menu product')</h3>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
                @foreach ($clients as $item)
                    <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                            <a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer">
                                <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                                    <figure class="px-md-3 mb-0"><img
                                            src="{{ asset('uploads/clients/' . $item->image) }}"
                                            alt="{{ $item->name }}" /></figure>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- /section -->

@endsection
