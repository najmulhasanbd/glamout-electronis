@extends('frontend.frontend_master')

@section('frontend_content')
    <!-- banner video start -->
    <video autoplay loop muted style="width: 100%; height: 89vh; object-fit: cover;">
        <source src="{{ asset('upload/banner-video/' . $bannerVideo->video) }}" type="video/mp4">
        <source src="{{ asset('upload/banner-video/' . $bannerVideo->video) }}" type="video/ogg">
        Your browser does not support the video tag.
    </video>
    <!-- banner video end -->

    <!-- information start -->
    <section class="information-area py-5">
        <div class="container d-flex justify-content-center gap-5 flex-wrap">
            <a href="{{ route('contact.page') }}" class="btn">Contact Us <i class="fa fa-play"></i> </a>
            <a href="{{route('career.page')}}" class="btn">Career <i class="fa fa-play"></i> </a>
            <a href="{{route('brochure.page')}}" class="btn">Product Brouchures <i class="fa fa-play"></i> </a>
        </div>
    </section>
    <!-- information end -->

    <!-- testoflife start -->
    <section class="testioflife-area">
        <div class="container text-center">
            <h2 class="text-white">
                TASTE OF LIFE
            </h2>
            <p class="text-white">, ‘The Taste of Life’ brings more flavors to life, creates more joyful moments
            </p>
        </div>
    </section>
    <!-- testoflife end -->

    <!-- brand view -->
    <section class="brand_view py-5 my-5">
        <div class="container">
            <h2 class="page_title"><span>"Exclusive New Arrivals"</span></h2>
            <div class="col-12 pt-5">
                <div class="brand_circle">
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/1.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/1.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/1.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/2.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/3.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/4.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/5.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/6.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/7.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/1.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/2.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/3.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                    <a href="brand_product.html" class="single_brand_view d-block" target="_blank">
                        <img src="{{ asset('frontend') }}/images/brouchure/4.jpg" alt="" loading="lazy"
                            class="w-100">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- brand view -->

    <!-- about start -->
    <section class="about-area pb-5" style="background-color: #F2F2F2;">
        <div class="container">
            <div class="row">
                <h2 class="text-center">
                    <span class="section_title">About US</span>
                </h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="single_about text-center card p-3">
                        <div>
                            <img loading="lazy" src="{{ asset('frontend') }}/images/foods/1.jpg" width="203px"
                                height="203px" alt="">
                        </div>
                        <h4><a href="">INCEPTION</a></h4>
                        <p>The journey of started from 1981 and its evolution to one of the top food manufacturing
                            companies that have set the grounds for development for any potentialities.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_about text-center card p-3">
                        <div>
                            <img loading="lazy" src="{{ asset('frontend') }}/images/foods/2.jpg" width="203px"
                                height="203px" alt="">
                        </div>
                        <h4><a href="">INCEPTION</a></h4>
                        <p>The journey of started from 1981 and its evolution to one of the top food manufacturing
                            companies that have set the grounds for development for any potentialities.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_about text-center card p-3">
                        <div>
                            <img loading="lazy" src="{{ asset('frontend') }}/images/foods/1.jpg" width="203px"
                                height="203px" alt="">
                        </div>
                        <h4><a href="">INCEPTION</a></h4>
                        <p>The journey of started from 1981 and its evolution to one of the top food manufacturing
                            companies that have set the grounds for development for any potentialities.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_about text-center card p-3">
                        <div>
                            <img loading="lazy" src="{{ asset('frontend') }}/images/foods/4.jpg" width="203px"
                                height="203px" alt="">
                        </div>
                        <h4><a href="">INCEPTION</a></h4>
                        <p>The journey of started from 1981 and its evolution to one of the top food manufacturing
                            companies that have set the grounds for development for any potentialities.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_about text-center card p-3">
                        <div>
                            <img loading="lazy" src="{{ asset('frontend') }}/images/foods/5.jpg" width="203px"
                                height="203px" alt="">
                        </div>
                        <h4><a href="">INCEPTION</a></h4>
                        <p>The journey of started from 1981 and its evolution to one of the top food manufacturing
                            companies that have set the grounds for development for any potentialities.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_about text-center card p-3">
                        <div>
                            <img loading="lazy" src="{{ asset('frontend') }}/images/foods/6.jpg" width="203px"
                                height="203px" alt="">
                        </div>
                        <h4><a href="">INCEPTION</a></h4>
                        <p>The journey of started from 1981 and its evolution to one of the top food manufacturing
                            companies that have set the grounds for development for any potentialities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- blog start -->
    <section class="blog-area py-5">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="single-blog events card">
                        <h2 class="p-2 mb-0">Events</h2>
                        <div class="event_active">
                            <div>
                                <div class="row g-2">
                                    <div class="col-lg-6 col-12">
                                        <img src="{{ asset('frontend') }}/images/foods/1.jpg" class="w-100 h-100"
                                            loading="lazy" style="padding: 10px;padding-bottom: 3px;" alt="">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="event_content p-3">
                                            <a href="">We were thrilled to be the snacks partner of the ‘2nd
                                                VC…</a>
                                            <small>20 October, 2024</small>
                                            <p>Our commitment stands strong. We're extending our relief efforts in
                                                Sherpur,
                                                ensuring support for the flood-affected until the situation improves…
                                            </p>
                                            <a href="event_details.html" class="btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row g-2">
                                    <div class="col-lg-6 col-12">
                                        <img src="{{ asset('frontend') }}/images/foods/2.jpg" class="w-100 h-100"
                                            loading="lazy" style="padding: 10px;padding-bottom: 3px;" alt="">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="event_content p-3">
                                            <a href="">We were thrilled to be the snacks partner of the ‘2nd
                                                VC…</a>
                                            <small>20 October, 2024</small>
                                            <p>Our commitment stands strong. We're extending our relief efforts in
                                                Sherpur,
                                                ensuring support for the flood-affected until the situation improves…
                                            </p>
                                            <a href="event_details.html" class="btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row g-2">
                                    <div class="col-lg-6 col-12">
                                        <img src="{{ asset('frontend') }}/images/foods/3.jpg" class="w-100 h-100"
                                            loading="lazy" style="padding: 10px;padding-bottom: 3px;" alt="">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="event_content p-3">
                                            <a href="">We were thrilled to be the snacks partner of the ‘2nd
                                                VC…</a>
                                            <small>20 October, 2024</small>
                                            <p>Our commitment stands strong. We're extending our relief efforts in
                                                Sherpur,
                                                ensuring support for the flood-affected until the situation improves…
                                            </p>
                                            <a href="event_details.html" class="btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row g-2">
                                    <div class="col-lg-6 col-12">
                                        <img src="{{ asset('frontend') }}/images/foods/4.jpg" class="w-100 h-100"
                                            loading="lazy" style="padding: 10px;padding-bottom: 3px;" alt="">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="event_content p-3">
                                            <a href="">We were thrilled to be the snacks partner of the ‘2nd
                                                VC…</a>
                                            <small>20 October, 2024</small>
                                            <p>Our commitment stands strong. We're extending our relief efforts in
                                                Sherpur,
                                                ensuring support for the flood-affected until the situation improves…
                                            </p>
                                            <a href="event_details.html" class="btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-blog events card">
                        <h2 class="p-2 mb-0">Latest News</h2>
                        <div class="event_active">
                            <div>
                                <div class="row g-2">
                                    <div class="col-lg-6 col-12">
                                        <img src="{{ asset('frontend') }}/images/foods/5.jpg" class="w-100 h-100"
                                            loading="lazy" style="padding: 10px;padding-bottom: 3px;" alt="">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="event_content p-3">
                                            <a href="">We were thrilled to be the snacks partner of the ‘2nd
                                                VC…</a>
                                            <small>20 October, 2024</small>
                                            <p>Our commitment stands strong. We're extending our relief efforts in
                                                Sherpur,
                                                ensuring support for the flood-affected until the situation improves…
                                            </p>
                                            <a href="news_details.html" class="btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row g-2">
                                    <div class="col-lg-6 col-12">
                                        <img src="{{ asset('frontend') }}/images/foods/6.jpg" class="w-100 h-100"
                                            loading="lazy" style="padding: 10px;padding-bottom: 3px;" alt="">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="event_content p-3">
                                            <a href="">We were thrilled to be the snacks partner of the ‘2nd
                                                VC…</a>
                                            <small>20 October, 2024</small>
                                            <p>Our commitment stands strong. We're extending our relief efforts in
                                                Sherpur,
                                                ensuring support for the flood-affected until the situation improves…
                                            </p>
                                            <a href="news_details.html" class="btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row g-2">
                                    <div class="col-lg-6 col-12">
                                        <img src="{{ asset('frontend') }}/images/foods/7.jpg" class="w-100 h-100"
                                            loading="lazy" style="padding: 10px;padding-bottom: 3px;" alt="">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="event_content p-3">
                                            <a href="">We were thrilled to be the snacks partner of the ‘2nd
                                                VC…</a>
                                            <small>20 October, 2024</small>
                                            <p>Our commitment stands strong. We're extending our relief efforts in
                                                Sherpur,
                                                ensuring support for the flood-affected until the situation improves…
                                            </p>
                                            <a href="news_details.html" class="btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

    <!-- brand product start -->
    <section class="brand-product pb-5 about-area">
        <div class="container">
            <div class="row">
                <h2 class="text-center pt-0">
                    <span class="section_title">See All Products</span>
                </h2>
            </div>
            <div class="row">
                <div class="product_brand">
                    <a href="brand_product.html" class="single_brand_product card d-block">
                        <img loading="lazy" src="{{ asset('frontend') }}/images/foods/1.jpg" alt="">
                    </a>
                    <a href="brand_product.html" class="single_brand_product card d-block">
                        <img loading="lazy" src="{{ asset('frontend') }}/images/foods/2.jpg" alt="">
                    </a>
                    <a href="brand_product.html" class="single_brand_product card d-block">
                        <img loading="lazy" src="{{ asset('frontend') }}/images/foods/3.jpg" alt="">
                    </a>
                    <a href="brand_product.html" class="single_brand_product card d-block">
                        <img loading="lazy" src="{{ asset('frontend') }}/images/foods/4.jpg" alt="">
                    </a>
                    <a href="brand_product.html" class="single_brand_product card d-block">
                        <img loading="lazy" src="{{ asset('frontend') }}/images/foods/5.jpg" alt="">
                    </a>
                    <a href="brand_product.html" class="single_brand_product card d-block">
                        <img loading="lazy" src="{{ asset('frontend') }}/images/foods/6.jpg" alt="">
                    </a>
                    <a href="brand_product.html" class="single_brand_product card d-block">
                        <img loading="lazy" src="{{ asset('frontend') }}/images/foods/7.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- brand product end -->
@endsection
