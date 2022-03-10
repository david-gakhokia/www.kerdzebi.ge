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
              <a href="{{ route('/') }}"><img src="{{ asset('uploads/settings/'.$setting->image) }}" srcset="{{ asset('uploads/settings/'.$setting->image) }} 2x" alt=""></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('/') }}">@lang('Home')</a></li>
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('about') }}">@lang('About Us')</a></li>
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('prices') }}">@lang('Prices')</a></li>
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('products') }}">@lang('Products')</a></li>
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('blog') }}">@lang('News')</a></li>
                <li class="nav-item"><a class="nav-link toggle" href="{{ route('contact') }}">@lang('Contact')</a></li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              <li class="nav-item dropdown language-select text-uppercase">
                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{app()->getLocale() }}</a>
                <ul class="dropdown-menu">
                    @if (app()->getLocale() == 'en')
                        <li class="nav-item">
                            <a class="dropdown-item" href="?language=ka">
                                <img src="https://img.icons8.com/emoji/32/000000/georgia-emoji.png" alt="KA">
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="dropdown-item" href="?language=en">
                                <img src="https://img.icons8.com/emoji/32/000000/united-kingdom-emoji.png" alt="EN">
                            </a>
                        </li>
                    @endif

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

            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title text-white mb-3">@lang('Contact Info')</h4>
              <p>{{ $setting->address }}</p>
              <a href="mailto:{{ $setting->email }}"><p>{{ $setting->email }}</p></a>
              <a href="tel:{{ $setting->phone }}"><p>{{ $setting->phone }}</p></a>

            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title text-white mb-3">@lang('Site Map')</h4>
              <ul class="list-unstyled">
                <li><a href="{{ route('about') }}">@lang('About Us')</a></li>
                <li><a href="{{ route('/') }}">@lang('Terms of Use')</a></li>
                <li><a href="{{ route('/') }}">@lang('Privacy Policy')</a></li>
                <li><a href="{{route('contact')}}">@lang('Contact')</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title text-white mb-3">@lang('Follow Us')</h4>
              <nav class="nav social social-white">
                  @foreach ($networks as $network )
                    <a href="{{ $network->link }}"><i class="uil uil-{{ $network->icon }}"></i></a>
                  @endforeach
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
