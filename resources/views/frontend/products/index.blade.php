@extends('frontend.layouts.app')

@section('title', __('Products'))

@section('content')

    <section class="wrapper bg-light">
      <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
          <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto">
            <h1 class="display-1 mb-3">@lang('Products')</h1>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-9 pt-md-11 pb-14 pb-md-16">
        <div class="projects-overflow mt-md-10 mb-10 mb-lg-15">

          @foreach ($products as $item )
          <div class="project item">
            <div class="row">
                <figure class="col-lg-7 offset-lg-5 col-xl-6 offset-xl-5 rounded">
                    @if ($item->image)
                        <img src="{{ asset('uploads/products/'.$item->image) }}"  height="50" alt="{{ $item->name }}">
                    @else
                        <img src="{{ asset('frontend/assets/img/no-image-available.webp') }}" height="100" alt="No Image" />
                    @endif
                </figure>
              <div class="project-details d-flex justify-content-center flex-column" style="left: 18%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <p class="post-category text-line text-leaf mb-3">{{ $item->category->name }}</p>
                      <h2 class="post-title mb-3">{{ $item->name }}</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>{{ $item->description }}</p>
                      <a href="{{ route ('products.show',$item->id) }}" class="more hover link-leaf">@lang('Read More')</a>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.project-details -->
            </div>
            <!-- /.row -->
          </div>
          @endforeach

        </div>
        <!-- /.projects-overflow -->
        <nav class="d-flex justify-content-center" aria-label="pagination">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
              </a>
            </li>
          </ul>
          <!-- /.pagination -->
        </nav>
        <!-- /nav -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@endsection
