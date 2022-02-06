@extends('backend.layouts.app')

@section('title', 'QR სტიკერი')

@section('content')

            <div class="row">
              <div class="col-12">
                <div class="card">

                    <div class="card-header">
                    <a href="#0" class="btn btn-icon icon-left btn-primary"><i class="fas fa-qrcode"></i>@lang('dashboard.QR code Template')</a>
                    </div>

                    <div class="card-body">
                        <div class="row text-center mt-5">
                            <div  class="col-md-12">
                                <div id="printQR" class="mb-3">
                                    <h3>@lang('dashboard.Table') №{{ $table->name }} </h3>
                                    <h4>{{ $table->place ? $table->place->name : 'კატეგორიის გარეშე' }}</h4>



                                    {!! QrCode::size(250)->generate('www.exodus.kerdzebi.ge/table_id/'.$id) !!}
                                </div>
                                <h3 class="mt-3"><a href="/table_id/{{ $table->id }}" target="_blank">QR @lang('dashboard.Link')</a></h3>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-right">
                                    <button onclick="codespeedy()"  class="btn btn-success"><i class="fas fa-print"></i> @lang('dashboard.Print')</button>

                                    <a href="{{ route ('tables.index')}}" class="btn btn-icon icon-left btn-secondary"><i class="fas fa-backward"></i>@lang('dashboard.Back')</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
              </div>
            </div>

            <script type="text/javascript">
                function codespeedy() {
                  var print_div = document.getElementById("printQR");
                  var print_area = window.open();
                  print_area.document.write(print_div.innerHTML);
                  print_area.document.close();
                  print_area.focus();
                  print_area.print();
                  print_area.close();
                }
            </script>

@endsection
