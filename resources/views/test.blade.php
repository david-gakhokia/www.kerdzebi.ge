@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')

<section class="ftco-section">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none"></a>
        </header>
    </div>
    <div class="container">
        @foreach ($categories as $category)
            <div class="row justify-content-center" style="margin-bottom:40px">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h3 class="subheading" >• {{$category->name}} • </h3>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom:100px">
                @foreach ($sub_categories as $child)
                    @if ($child->parent_id != Null)
                        <div class="col-md-3 mt-4" style="text-align:center">
                            <div class="heading-menu text-center ftco-animate">
                                <h3>{{$child->name}}</h3>
                            </div>
                            <a href="{{'/category/'.$child->id }}">
                                @if($child->image)
                                    <img class="menu-img img-fluid" src="{{ asset('uploads/categories/'.$child->image) }}" style="border-radius:200px;object-fit:cover;width:200px;"/>
                                @else
                                    <img class="menu-img img-fluid" src="https://img.icons8.com/windows/100/000000/no-image.png" style="border-radius:200px;object-fit:cover;width:200px;" />
                                @endif
                            </a>
                            <div class="col-md-12 text-center ftco-animate fadeInUp ftco-animated">
                                <p>
                                    <a href="{{ '/category/'.$child->id }}" style="border-radius: 8px ; margin-top: 15px;" class="btn btn-info py-2 px-3">{{ __('View') }}</a>
                                </p>
                            </div>
                        </div>
                    @else

                    @endif

                @endforeach
            </div>
                @endforeach

    </div>
</section>

@endsection
