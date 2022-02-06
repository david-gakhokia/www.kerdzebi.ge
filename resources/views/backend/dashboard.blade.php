@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    @can('product-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('products.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-purple">
                <i class="fas fa-utensils"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $products->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Products')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

    @can('category-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('categories.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-green">
                <i class="fas fa-align-left"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $categories->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Categories')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

    @can('user-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('users.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-cyan">
                <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $users->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Users')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan


    @can('place-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('places.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-orange">
                <i class="far fa-bell"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $users->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Places')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

    @can('user-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('places.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-yellow">
                <i class="fas fa-table"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $tables->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Tables')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan


    @can('reservation-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('reservations.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-red">
                <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $reservations->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Reservations')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

</div>
    {{-- <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Reservations')</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>@lang('dashboard.Name')</th>
                                    <th>@lang('dashboard.Email')</th>
                                    <th>@lang('dashboard.Phone')</th>
                                    <th>@lang('dashboard.Date')</th>
                                    <th>@lang('dashboard.Time')</th>
                                    <th>@lang('dashboard.Person')</th>
                                    <th>@lang('dashboard.Tables')</th>
                                    <th>@lang('dashboard.Status')</th>
                                    <th>@lang('dashboard.Action')</th>
                                </tr>
                                <tr>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                                        <div class="progress-bar bg-success" data-width="100" style="width: 100px;"></div>
                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                                        <div class="progress-bar bg-success" data-width="100" style="width: 100px;"></div>
                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td>Ecommerce website</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                                        <div class="progress-bar bg-success" data-width="100" style="width: 100px;"></div>
                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


@endsection
