@extends('frontend.layouts.app')

@section('title', __('Home'))

@section('content')


    <section class="wrapper bg-gradient-primary">
      <div class="container pt-10 pt-md-14 pb-8 text-center">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="{{ asset('frontend/assets/img/illustrations/i2.png') }}" srcset="{{ asset('frontend/assets/img/illustrations/i2@2x.png 2x') }}" alt=""></figure>
          </div>
          <!-- /column -->
          <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
            <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">@lang('home.Make the restaurant digital')</h1>
            <p class="lead fs-lg mb-7">@lang('home.Create an QR menu of the restaurant with the help of Kerdzebi.ge')</p>
            <span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-14 pt-md-16">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-16 text-uppercase text-muted mb-3">What We Do?</h2>
            <h3 class="display-4 mb-10 px-xl-10">The service we offer is specifically designed to meet your needs.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
          <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
          <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
          <div class="row gx-md-5 gy-5 text-center">
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="{{ asset('frontend/assets/img/icons/lineal/search-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="">
                  <h4>SEO Services</h4>
                  <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                  <a href="#" class="more hover link-yellow">Learn More</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="{{ asset('frontend/assets/img/icons/lineal/browser.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="">
                  <h4>Web Design</h4>
                  <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                  <a href="#" class="more hover link-red">Learn More</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="{{ asset('frontend/assets/img/icons/lineal/chat-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="">
                  <h4>Social Engagement</h4>
                  <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                  <a href="#" class="more hover link-green">Learn More</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="{{ asset('frontend/assets/img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="">
                  <h4>Content Marketing</h4>
                  <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                  <a href="#" class="more hover link-blue">Learn More</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.position-relative -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-reverse-primary">
      <div class="container py-16 py-md-18">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-8 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <figure><img class="w-auto" src="{{ asset('frontend/assets/img/illustrations/i3.png') }}" srcset="{{ asset('frontend/assets/img/illustrations/i3@2x.png 2x') }}" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Analyze Now</h2>
            <h3 class="display-4 mb-5">Wonder how much faster your website can go? Easily check your SEO Score now.</h3>
            <p class="mb-7">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            <div class="row">
              <div class="col-lg-9">
                <form action="#">
                  <div class="form-floating input-group">
                    <input type="url" class="form-control" placeholder="Enter Website URL" id="seo-check">
                    <label for="seo-check">Enter Website URL</label>
                    <button class="btn btn-primary" type="button">Check</button>
                  </div>
                </form>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-start lower-start">
      <div class="container py-14 pt-md-17 pb-md-15">
        <div class="row gx-md-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="card shadow-lg me-lg-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">01</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Collect Ideas</h4>
                    <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card shadow-lg ms-lg-13 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">02</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Data Analysis</h4>
                    <p class="mb-0">Vivamus sagittis lacus vel augue laoreet.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card shadow-lg mx-lg-6 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">03</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Finalize Product</h4>
                    <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Our Strategy</h2>
            <h3 class="display-4 mb-5">Here are 3 working steps to organize our business projects.</h3>
            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis.</p>
            <p class="mb-6">Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur.</p>
            <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-lg-22 mb-xl-24 align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="{{ asset('frontend/assets/img/illustrations/i6.png') }}" srcset="{{ asset('frontend/assets/img/illustrations/i6@2x.png 2x') }}" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Why Choose Us?</h2>
            <h3 class="display-4 mb-7">We bring solutions to make life easier for our clients.</h3>
            <div class="accordion accordion-wrapper" id="accordionExample">
              <div class="card plain accordion-item">
                <div class="card-header" id="headingOne">
                  <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Professional Design </button>
                </div>
                <!--/.card-header -->
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingTwo">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Top-Notch Support </button>
                </div>
                <!--/.card-header -->
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingThree">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Header and Slider Options </button>
                </div>
                <!--/.card-header -->
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
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
    <section class="wrapper bg-gradient-primary">
      <div class="container py-14 pt-md-16 pb-md-18">
        <div class="position-relative mt-lg-n23 mt-xl-n25">
          <div class="row text-center">
            <div class="col-lg-6 mx-auto">
              <h2 class="fs-16 text-uppercase text-muted mb-3">Our Team</h2>
              <h3 class="display-4 mb-10">Think unique and be innovative. Make a difference with Sandbox.</h3>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
          <div class="position-relative">
            <div class="shape bg-dot blue rellax w-16 h-17" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem; z-index: 0;"></div>
            <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem; z-index: 0;"></div>
            <div class="row grid-view gy-6 gy-xl-0">
              <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="{{ asset('frontend/assets/img/avatars/te1.jpg') }}{{ asset('frontend/" srcset="assets/img/avatars/te') }}1@2x.jpg 2x" alt="">
                    <h4 class="mb-1">Coriss Ambady</h4>
                    <div class="meta mb-2">Financial Analyst</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="{{ asset('frontend/assets/img/avatars/te2.jpg') }}{{ asset('frontend/" srcset="assets/img/avatars/te') }}2@2x.jpg 2x" alt="">
                    <h4 class="mb-1">Cory Zamora</h4>
                    <div class="meta mb-2">Marketing Specialist</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="{{ asset('frontend/assets/img/avatars/te3.jpg') }}{{ asset('frontend/" srcset="assets/img/avatars/te') }}3@2x.jpg 2x" alt="">
                    <h4 class="mb-1">Nikolas Brooten</h4>
                    <div class="meta mb-2">Sales Manager</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 col-xl-3">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="{{ asset('frontend/assets/img/avatars/te4.jpg') }}{{ asset('frontend/" srcset="assets/img/avatars/te') }}4@2x.jpg 2x" alt="">
                    <h4 class="mb-1">Jackie Sanders</h4>
                    <div class="meta mb-2">Investment Planner</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /.position-relative -->
        </div>
        <!-- /div -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <figure><img class="w-auto" src="{{ asset('frontend/assets/img/illustrations/i8.png') }}" srcset="{{ asset('frontend/assets/img/illustrations/i8@2x.png 2x') }}" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Our Solutions</h2>
            <h3 class="display-4 mb-5">We make your spending stress-free for you to have the perfect control.</h3>
            <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus.</p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare. Curabitur blandit.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus vel augue rutrum.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-reverse-primary">
      <div class="container py-14 py-md-18">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6 col-xl-5 align-self-end">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Cum sociis natoque penatibus et magnis dis parturient montes.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1">Coriss Ambady</h5>
                          <p class="mb-0">Financial Analyst</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 align-self-end">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1">Cory Zamora</h5>
                          <p class="mb-0">Marketing Specialist</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Donec id elit non porta gravida at eget metus. Duis mollis est luctus commodo nisi erat.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1">Barclay Widerski</h5>
                          <p class="mb-0">Sales Specialist</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 align-self-start">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo pellentesque.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1">Jackie Sanders</h5>
                          <p class="mb-0">Investment Planner</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-muted mb-3 mt-lg-n6">Our Community</h2>
            <h3 class="display-4 mb-5">Don't take our word for it. See what customers are saying about us.</h3>
            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod.</p>
            <a href="#" class="btn btn-primary rounded-pill mt-3">All Testimonials</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
      <div class="container py-14 pt-md-14 pb-md-18">
        <div class="row gy-6 mb-14 mb-md-18">
          <div class="col-lg-4">
            <h2 class="fs-16 text-uppercase text-muted mt-lg-18 mb-3">@lang('Our Pricing')</h2>
            <h3 class="display-4 mb-3">We offer great and premium prices.</h3>
            <p>Enjoy a <a href="#" class="hover">free 30-day trial</a> and experience the full service. No credit card required!</p>
            <a href="#" class="btn btn-primary rounded-pill mt-2">@lang('See All Prices')</a>
          </div>
          <!--/column -->
          <div class="col-lg-7 offset-lg-1 pricing-wrapper">
            <div class="pricing-switcher-wrapper switcher justify-content-start justify-content-lg-end">
              <p class="mb-0 pe-3">@lang('Monthly')</p>
              <div class="pricing-switchers">
                <div class="pricing-switcher pricing-switcher-active"></div>
                <div class="pricing-switcher"></div>
                <div class="switcher-button bg-primary"></div>
              </div>
              <p class="mb-0 ps-3">@lang('Yearly') <span class="text-red">( @lang('Saving') 30%)</span></p>
            </div>
            <div class="row gy-6 position-relative mt-5">
              <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1" style="bottom: -0.5rem; right: -1.6rem;"></div>
              <div class="col-md-6">
                <div class="pricing card shadow-lg">
                  <div class="card-body pb-12">
                    <div class="prices text-dark">
                      <div class="price price-show"><span class="price-currency">$</span><span class="price-value">19</span> <span class="price-duration">month</span></div>
                      <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">year</span></div>
                    </div>
                    <!--/.prices -->
                    <h4 class="card-title mt-2">Premium Plan</h4>
                    <ul class="icon-list bullet-soft-primary mt-8 mb-9">
                      <li><i class="uil uil-check fs-21"></i><span><strong>5</strong> Projects </span></li>
                      <li><i class="uil uil-check fs-21"></i><span><strong>100K</strong> API Access </span></li>
                      <li><i class="uil uil-check fs-21"></i><span><strong>200MB</strong> Storage </span></li>
                      <li><i class="uil uil-check fs-21"></i><span> Weekly <strong>Reports</strong></span></li>
                      <li><i class="uil uil-check fs-21"></i><span> 7/24 <strong>Support</strong></span></li>
                    </ul>
                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/column -->
              <div class="col-md-6 popular">
                <div class="pricing card shadow-lg">
                  <div class="card-body pb-12">
                    <div class="prices text-dark">
                      <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">month</span></div>
                      <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">year</span></div>
                    </div>
                    <!--/.prices -->
                    <h4 class="card-title mt-2">Corporate Plan</h4>
                    <ul class="icon-list bullet-soft-primary mt-8 mb-9">
                      <li><i class="uil uil-check fs-21"></i><span><strong>20</strong> Projects </span></li>
                      <li><i class="uil uil-check fs-21"></i><span><strong>300K</strong> API Access </span></li>
                      <li><i class="uil uil-check fs-21"></i><span><strong>500MB</strong> Storage </span></li>
                      <li><i class="uil uil-check fs-21"></i><span> Weekly <strong>Reports</strong></span></li>
                      <li><i class="uil uil-check fs-21"></i><span> 7/24 <strong>Support</strong></span></li>
                    </ul>
                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-14 align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="{{ asset('frontend/assets/img/illustrations/i5.png') }}" srcset="{{ asset('frontend/assets/img/illustrations/i5@2x.png 2x') }}" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Let’s Talk</h2>
            <h3 class="display-4 mb-3">Let's make something great together. We are trusted by over 5000+ clients.</h3>
            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="px-lg-5">
          <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('frontend/assets/img/brands/c1.png') }}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('frontend/assets/img/brands/c2.png') }}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('frontend/assets/img/brands/c3.png') }}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('frontend/assets/img/brands/c4.png') }}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('frontend/assets/img/brands/c5.png') }}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('frontend/assets/img/brands/c6.png') }}" alt=""></figure>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /div -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@endsection
