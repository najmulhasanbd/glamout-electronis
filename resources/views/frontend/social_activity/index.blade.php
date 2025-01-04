@extends('frontend.frontend_master')

@section('frontend_content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-area p-2" style="background-color: #FED000;">
        <ul class="d-flex align-items-center gap-3 container-fluid">
            <li><a href="{{ url('/') }}" class="fw-semibold">Home <i class="fa fa-play" style="font-size: 10px;"></i></a>
            </li>
            <li>Social Activity</li>
        </ul>
    </div>
    <!-- breadcrumb endstart -->

    <!-- page banner -->
    <div class="page-banner" style="background-image: url({{ asset('frontend') }}/images/page-banner/about.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2>Our Plateforms</h2>
            </div>
        </div>
    </div>
    <!-- page banner -->

    <!-- about content -->
    <main class="main-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12">
                    <div class="platform-content media-content">
                        <h2 class="page_title"><span>our social Activity</span></h2>

                        {!! $data->description !!}

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- about content -->
@endsection


01873585866
