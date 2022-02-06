<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
        @include('frontend.body.head')
  </head>
  <body>
    <!-- Start Wrapper Area-->
    <div class="content-wrapper">
        <!-- Start Header Area -->
        @include('frontend.body.header')
        <!-- End Header Area -->

        <!--  Start Main Area -->
            @yield('content')
        <!--  End Main Area -->

    </div>
    <!-- End Wrapper Area-->


        <!-- Start Footer Area -->
        @include('frontend.body.footer')
        <!-- End Footer Area -->

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>

    <!-- Start Js Area -->
        @include('frontend.body.js')
    <!--// End JS Area -->
  </body>
</html>
