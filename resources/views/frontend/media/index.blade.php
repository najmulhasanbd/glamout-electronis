@extends('frontend.frontend_master')

@section('frontend_content')
  
  <!-- breadcrumb start -->
  <div class="breadcrumb-area p-2" style="background-color: #FED000;">
    <ul class="d-flex align-items-center gap-3 container-fluid">
        <li><a href="{{url('/')}}" class="fw-semibold">Home <i class="fa fa-play" style="font-size: 10px;"></i></a>
        </li>
        <li>Media</li>
    </ul>
</div>
<!-- breadcrumb endstart -->

<!-- page banner -->
<div class="page-banner" style="background-image: url({{asset('frontend')}}/images/page-banner/about.jpg);">
    <div class="container">
        <div class="page-banner-content">
            <h2>Media</h2>
        </div>
    </div>
</div>
<!-- page banner -->

<!-- about content -->
<main class="main-area py-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="media-content">
                    <h2 class="page_title"><span>media </span></h2>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6">
                <div class="single_media card">
                    <a href="events.html" class="d-block" title="Our Events">
                        <img src="{{asset('frontend')}}/images/event/event.jpg" class="rounded" alt="" loading="lazy">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_media card">
                    <a href="news.html" class="d-block" title="Our Latest News">
                        <img src="{{asset('frontend')}}/images/event/latest.jpg" class="rounded" alt="" loading="lazy">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_media card">
                    <a href="gallery.html" class="d-block" title="Our Photo and Video Gallery">
                        <img src="{{asset('frontend')}}/images/event/gallery.png" class="rounded" alt="" loading="lazy">
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- about content -->
@endsection
