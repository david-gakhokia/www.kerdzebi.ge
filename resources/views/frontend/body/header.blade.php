    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="{{ route('/') }}">
                @if ($setting->logo)
                    <img src="{{ asset('uploads/settings/'.$setting->logo) }}"  width="100" srcset="{{ asset('uploads/settings/'.$setting->logo) }} 2x" alt="{{ $setting->logo }}">
                @else
                    <img src="{{ asset('frontend/assets/img/logo-dark.png') }}" srcset="assets/img/logo-dark@2x.png 2x" alt="">
                @endif

            </a>
          </div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="index.html"><img src="assets/img/logo-light.png" srcset="assets/img/logo-light@2x.png 2x" alt=""></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('home') }}">@lang('Home')</a></li>
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('home') }}">@lang('About Us')</a></li>
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('home') }}">@lang('Prices')</a></li>
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('home') }}">@lang('News')</a></li>
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('home') }}">@lang('Contact')</a></li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              <li class="nav-item dropdown language-select text-uppercase">
                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="?language=en">En</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="?language=ka">Ka</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="?language=ru">Ru</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" data-toggle="offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
              <li class="nav-item d-lg-none">
                <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
          <div class="offcanvas-info text-inverse">
            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-info-close" aria-label="Close"></button>
            <a href="index.html"><img src="assets/img/logo-light.png" srcset="assets/img/logo-light@2x.png 2x" alt=""></a>
            <div class="mt-4 widget">
              <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title text-white mb-3">Contact Info</h4>
              <address> Moonshine St. 14/05 <br> Light City, London </address>
              <a href="cdn-cgi/l/email-protection.html#88eee1fafbfca6e4e9fbfcc8ede5e9e1e4a6ebe7e5"><span class="__cf_email__" data-cfemail="442d2a222b042129252d286a272b29">[email&#160;protected]</span></a><br> +00 (123) 456 78 90
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title text-white mb-3">Learn More</h4>
              <ul class="list-unstyled">
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title text-white mb-3">Follow Us</h4>
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
          <!-- /.offcanvas-info -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
