@extends('frontend.frontend_master')

@section('frontend_content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-area p-2" style="background-color: #FED000;">
        <ul class="d-flex align-items-center gap-3 container-fluid">
            <li><a href="{{ url('/') }}" class="fw-semibold">Home <i class="fa fa-play" style="font-size: 10px;"></i></a>
            </li>
            <li>Brochure</li>
        </ul>
    </div>
    <!-- breadcrumb endstart -->

    <!-- page banner -->
    <div class="page-banner" style="background-image: url({{ asset('frontend') }}/images/page-banner/about.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2>brochures</h2>
            </div>
        </div>
    </div>
    <!-- page banner -->

    <!-- about content -->
    <main class="main-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="media-content">
                        <h2 class="page_title"><span>Product Brouchures list </span></h2>
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-5">
                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ asset('upload/brouchure/pdfs/' . $item->pdf) }}"
                            class="single-brouchure card d-block text-center" target="_blank">
                            <div class="brouchere-thumbnail">
                                <img src="{{ asset('upload/brouchure/thumbnails/' . $item->thumbnail) }}" alt=""
                                    loading="lazy">
                            </div>
                            <h3> {{ ucwords($item->name) }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <!-- about content -->
@endsection
