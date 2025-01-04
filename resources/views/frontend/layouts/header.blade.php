<div id="preloader">
    <div class="spinner"></div>
</div>

<!-- header start -->
<header>
    <!-- <section class="header-area header-sticky"> -->
    <section class="header-area">
        <div class="container-fluid p-0">
            <!-- <ul class="mobile_top_header d-lg-none">
                <li><a href=""><i class="fa fa-circle-down"></i> Product Brouchures</a></li>
                <li data-bs-toggle="modal" data-bs-target="#changeCountry"><i
                        class="fa-solid fa-earth-americas"></i>
                    <span>You are no our
                        Global Site</span><a href="javascript:void(0)" class="change_country"><b> &nbsp Change
                            Country</b></a>
                </li> -->
            <!-- Modal -->
            <!-- <div class="modal fade" id="changeCountry" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Our Global
                                        Address</b></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex flex-wrap gap-2 justify-content-center">
                                <a href="" title="global.com" class="btn">Global <i class="fa fa-play"></i></a>
                                <a href="" title="global.com" class="btn">Dubai <i class="fa fa-play"></i></a>
                                <a href="" title="global.com" class="btn">Bangladesh <i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <li>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                </li>
            </ul> -->
            <div class="d-flex justify-content-between align-items-center relative">
                <div class="logo">
                    <a href="{{url('/')}}">
                        @if ($setting && $setting->logo)
                            <img src="{{ asset('upload/logo/' . $setting->logo) }}" style="max-width: 200px;"
                                alt="" loading="lazy">
                        @else
                            <p>Logo not available.</p>
                        @endif
                    </a>
                </div>
                <div class="top_sidebar">
                    <div class="header-top d-none d-lg-block">
                        <!-- <ul class="d-flex justify-content-end gap-5 mt-3">
                            <li><a href="brochure.html"><i class="fa fa-circle-down"></i> Product Brouchures</a>
                            </li>
                            <li data-bs-toggle="modal" data-bs-target="#exampleModal"> <span
                                    class="change_country"><i class="fa-solid fa-earth-americas"></i> You are no our
                                    Global Site</span> <a href="javascript:void(0)">Change Country</a></li> -->
                        <!-- Modal -->
                        <!-- <div class="modal fade" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Our Global
                                                    Address</b></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body d-flex flex-wrap gap-2 justify-content-center">
                                            <a href="" title="global.com" class="btn">Global <i
                                                    class="fa fa-play"></i></a>
                                            <a href="" title="global.com" class="btn">Dubai <i
                                                    class="fa fa-play"></i></a>
                                            <a href="" title="global.com" class="btn">Bangladesh <i
                                                    class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <li>
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href=""><i class="fa-brands fa-youtube"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                            </li>
                        </ul> -->
                    </div>
                    <nav>
                        <ul class="d-flex d-none d-xl-flex justify-content-between">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="brands.html">Brands</a></li>
                            <li><a href="global.html">Global Reach</a></li>
                            <li><a href="{{ route('media.page') }}">Media </a></li>
                            <li><a href="{{ route('supplier.page') }}">Suppliers</a></li>
                            <li><a href="{{ route('social.activity.page') }}">Social Activity</a></li>
                            <li><a href="{{ route('brochure.page') }}">Brouchures</a></li>
                            <li><a href="{{ route('career.page') }}">Career</a></li>
                            <li><a href="{{ route('contact.page') }}">Contact</a></li>
                            <li data-bs-toggle="modal" class="searchModal" data-bs-target="#searchModal"><a
                                    class="search_icon" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            </li>
                            <!-- desktop search Modal -->
                            <div class="modal fade" id="searchModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="" method="get">
                                                <div class="form-group d-flex">
                                                    <input type="search" class="form-control"
                                                        placeholder="Search Product ...">
                                                    <button type="submit">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>

                        <ul class="d-flex justify-content-end d-xl-none">
                            <li class="text-white" data-bs-toggle="modal" class="mobilesearchModal"
                                data-bs-target="#mobilesearchModal"
                                style="background-color: rgba(0, 0, 0, 0.521);padding: 5px 10px;border-radius: 5px;cursor: pointer;">
                                <i class="fa fa-search"></i>
                            </li>
                            <li data-bs-toggle="offcanvas" data-bs-target="#mobile_menu"
                                aria-controls="offcanvasExample"
                                style="background-color: rgba(255, 255, 255, 0.349);padding:5px 10px;border-radius: 5px;margin-right: 11px;color: white;margin-left: 10px;cursor: pointer;">
                                <i class="fa fa-bars"></i>
                            </li>

                            <!-- mobile search Modal -->
                            <div class="modal fade" id="mobilesearchModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="" method="get">
                                                <div class="form-group d-flex">
                                                    <input type="search" class="form-control"
                                                        placeholder="Search Product ...">
                                                    <button type="submit">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="offcanvas offcanvas-start" tabindex="-1" id="mobile_menu"
                                aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <ul class="offcanvas-body mobile_menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="brands.html">Brands</a></li>
                                    <li><a href="global.html">Global Reach</a></li>
                                    <li><a href="media.html">Media</a></li>
                                    <li><a href="supplier.html">Suppliers</a></li>
                                    <li><a href="plateform.html">Social Activity</a></li>
                                </ul>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>
<!-- header end -->
