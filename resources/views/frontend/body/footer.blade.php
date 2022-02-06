  <footer class="bg-navy text-inverse">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
      <div class="d-lg-flex flex-row align-items-lg-center">
        <h3 class="display-4 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white">@lang('Fill out the form and you will get access to the demo version')</h3>
        <a href="#" class="btn btn-primary rounded-pill mb-0 text-nowrap">@lang('Demo Versions')</a>
      </div>
      <!--/div -->
      <hr class="mt-11 mb-12">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
                @if ($setting->logo)
                    <img class="mb-4" src="{{ asset('uploads/settings/'.$setting->image) }}" width="100" srcset="{{ asset('uploads/settings/'.$setting->image) }}" alt="logo">
                @else
                    <img class="mb-4" src="{{ asset('frontend/assets/img/logo-light.png') }}" srcset="{{asset('frontend/assets/img/logo-light@2x.png 2x') }}" alt="">
                @endif



            <p class="mb-4">© {{ date('Y') }} Kerdzebi.ge<sup>&reg;</sup> <br class="d-none d-lg-block">All rights reserved.</p>
            {{-- &copy; 2021-{{ date('Y') }} | Powered By <a href="https://kerdzebi.ge" target="_blank" rel="noopener noreferrer">Kerdzebi.ge</a> <sup>&reg;</sup> --}}
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">@lang('Contact Info')</h4>
            <address class="pe-xl-15 pe-xxl-17">{{ $setting->address }}</address>
            <a href="mailto:{{ $setting->email }}" target="_blank">
                <span class="__cf_email__" >{{ $setting->email }}</span>
            </a>
            <br> {{ $setting->phone }}
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">@lang('Pages')</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="#">@lang('About Us')</a></li>
              <li><a href="#">@lang('Prices')</a></li>
              <li><a href="#">@lang('Terms of Use')</a></li>
              <li><a href="#">@lang('Privacy Policy')</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">@lang('News')</h4>
            <p class="mb-5">Subscribe to our newsletter to get our news to you.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate="">
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">@lang('mail')</label>
                      <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
