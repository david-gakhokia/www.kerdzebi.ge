@extends('frontend.layouts.app')

@section('title', __('Price'))

@section('content')

    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-20 pt-md-14 pb-md-22 text-center">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <h1 class="display-1 mb-3">@lang('Our Pricing')</h1>
                    <p class="lead mb-0 px-xl-10 px-xxl-13">@lang('prices.We offer great prices, premium products and quality service for your business')</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->



    <section class="wrapper">
        <div class="container pb-14 pb-md-1">
            <div class="pricing-wrapper position-relative mt-n18 mt-md-n21 mb-12 mb-md-15">
                <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;">
                </div>
                <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1"
                    style="bottom: 0.5rem; left: -2.5rem;"></div>
                <div class="pricing-switcher-wrapper switcher">
                    <p class="mb-0 pe-3">@lang('Monthly')</p>
                    <div class="pricing-switchers">
                        <div class="pricing-switcher pricing-switcher-active"></div>
                        <div class="pricing-switcher"></div>
                        <div class="switcher-button bg-primary"></div>
                    </div>
                    <p class="mb-0 ps-3">@lang('Yearly')</p>
                </div>
                <div class="row gy-6 mt-3 mt-md-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img src="{{ asset('frontend/assets/img/icons/lineal/shopping-basket.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="">
                                <h4 class="card-title">Basic Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">$</span><span
                                            class="price-value">9</span> <span class="price-duration">month</span></div>
                                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span
                                            class="price-value">99</span> <span class="price-duration">year</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                    <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                                    <li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong>
                                        </span></li>
                                    <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24
                                            <strong>Support</strong></span></li>
                                </ul>
                                <a href="#" class="btn btn-primary rounded-pill">@lang('Details')</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4 popular">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img src="{{ asset('frontend/assets/img/icons/lineal/home.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="">
                                <h4 class="card-title">Premium Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">$</span><span
                                            class="price-value">19</span> <span class="price-duration">month</span></div>
                                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span
                                            class="price-value">199</span> <span class="price-duration">year</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                    <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                                    <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                    <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24
                                            <strong>Support</strong></span></li>
                                </ul>
                                <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img src="{{ asset('frontend/assets/img/icons/lineal/briefcase-2.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="">
                                <h4 class="card-title">Corporate Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">$</span><span
                                            class="price-value">49</span> <span class="price-duration">month</span></div>
                                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span
                                            class="price-value">499</span> <span class="price-duration">year</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                    <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                                    <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                    <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
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
            <!--/.pricing-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

<section class="wrapper bg-light">
  <div class="container py-14 py-md-1 mb-3">
    <h2 class="display-4 mb-3">@lang('Our Pricing')</h2>
    <div class="row">
      <div class="col-lg-4">
        <p>@lang('prices.Enjoy a free 10-day trial the full service')</p>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    <a href="#" class="btn btn-primary rounded-pill mt-2">Request Demo</a>
    <div class="table-responsive">
      <table class="table table-borderless table-striped text-center">
        <thead>
          <tr>
            <th class="w-25"></th>
            <th>
              <div class="h4 mb-1">@lang('prices.Demo Version')</div>
              <div class="fs-15 fw-normal text-secondary">@lang('Free') / Monthly</div>
            </th>
            <th>
              <div class="h4 mb-1">@lang('prices.Basic Plan')</div>
              <div class="fs-15 fw-normal text-secondary">@lang('prices.Currency symbol') / Monthly</div>
            </th>
            <th>
              <div class="h4 mb-1">@lang('prices.Premium')</div>
              <div class="fs-15 fw-normal text-secondary">$19 / Monthly</div>
            </th>
            <th>
              <div class="h4 mb-1">@lang('prices.Corporate Plan')</div>
              <div class="fs-15 fw-normal text-secondary">2500 ₾ / @lang('Yearly')</div>
            </th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="option text-start">@lang('QR Stickers')</td>
            <td>1</td>
            <td>20</td>
            <td>50</td>
            <td>100</td>
          </tr>

          <tr>
            <td class="option text-start">Storage</td>
            <td>10MB</td>
            <td>50MB</td>
            <td>100MB</td>
            <td>500MB</td>
          </tr>
          <tr>
            <td class="option text-start">@lang('Languages')</td>
            <td>1</td>
            <td>1</td>
            <td>3</td>
            <td>Multi</td>
          </tr>
          <tr>
            <td class="option text-start">@lang('Orders')</td>
            <td>-</td>
            <td>-</td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
          </tr>
          <tr>
            <td class="option text-start">@lang('Reservations')</td>
            <td>-</td>
            <td>-</td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
          </tr>
          <tr>
            <td class="option text-start">@lang('API Access')</td>
            <td>-</td>
            <td>-</td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
          </tr>
          <tr>
            <td class="option text-start">Weekly Reports</td>
            <td>-</td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
          </tr>
          <tr>
            <td class="option text-start">24/7 Support</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th class="w-25"></th>
            <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">@lang('prices.Order')</a></th>
            <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">@lang('prices.Order')</a></th>
            <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">@lang('prices.Order')</a></th>
            <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">@lang('prices.Order')</a></th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->



@endsection
