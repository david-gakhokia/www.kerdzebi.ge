@extends('frontend.layouts.app')

@section('title', __('Contact'))

@section('content')

    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{ asset ('frontend/assets/img/photos/bg3.jpg') }}">
      <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 mb-3 text-white">@lang('Contact Info')</h1>
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="{{ route('/') }}">@lang('Home')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('Contact')</li>
              </ol>
            </nav>
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
      <div class="container pb-11">
        <div class="row mb-14 mb-md-16">
          <div class="col-xl-10 mx-auto mt-n19">
            <div class="card">
              <div class="row gx-0">
                <div class="col-lg-6 align-self-stretch">
                  <div class="map map-full rounded-top rounded-lg-start">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.2622284749123!2d41.634361615676475!3d41.650075987631354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40678701ecad9b21%3A0x6e48ffa6c890cbc2!2zRE1HIOKAoiDhg5Phg5gg4YOU4YObIOGDr-GDmA!5e0!3m2!1ska!2sge!4v1644855000034!5m2!1ska!2sge" style="width:100%; height: 100%; border:0" allowfullscreen=""></iframe>

                </div>
                  <!-- /.map -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                  <div class="p-10 p-md-11 p-lg-14">
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                      </div>
                      <div class="align-self-start justify-content-start">
                        <h5 class="mb-1">@lang('Address')</h5>
                        <p>{{ $setting->address }} </p>
                      </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                      </div>
                      <div>
                        <h5 class="mb-1">@lang('Phone')</h5>
                        <p><a href="tel:{{ $setting->phone }}" target="_blank" rel="noopener noreferrer" class="link-body"> {{ $setting->phone }}</a></p>
                      </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                      </div>
                      <div>
                        <h5 class="mb-1">@lang('E-mail')</h5>
                        <p class="mb-3"><a href="mailto:{{ $setting->email }}" class="link-body">{{ $setting->email }}</a></p>
                      </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                      </div>
                      <div>
                        <h5 class="mt-1">@lang('Working hours')</h5>
                        <p>{{ $setting->start_time_text }} - {{ $setting->end_time_text }}</p>
                        <p>{{ $setting->start_time }} - {{ $setting->end_time }}</p>
                      </div>
                    </div>
                    <!--/div -->
                  </div>
                  <!--/div -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <h2 class="display-4 mb-3 text-center">@lang('Contact form')</h2>
            <p class="lead text-center mb-10"></p>
            <form class="contact-form needs-validation" method="post" action="#0" novalidate="">
              <div class="messages"></div>
              <div class="row gx-4">
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="name" type="text" name="name" class="form-control" placeholder="@lang('Name')" required="">
                    <label for="form_name">@lang('Name')*</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your first name. </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="subject" type="text" name="subject" class="form-control" placeholder="Subject" required="">
                    <label for="form_lastname">@lang('Subject') *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your last name. </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required="">
                    <label for="form_email">@lang('E-mail') *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please provide a valid email address. </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-select-wrapper">
                    <select class="form-select" id="form-select" name="department" required="">
                      <option selected="" disabled="" value="">@lang('Select a department')</option>
                      <option value="Sales">@lang('Sales')</option>
                      <option value="Support">@lang('Customer Support')</option>
                    </select>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please select a department. </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-12">
                  <div class="form-floating mb-4">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required=""></textarea>
                    <label for="form_message">@lang('Message')*</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your messsage. </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-12 text-center">
                  <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{ __('Send message') }}">
                  {{-- <p class="text-muted"><strong>*</strong> These fields are required.</p> --}}
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </form>
            <!-- /form -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@endsection
