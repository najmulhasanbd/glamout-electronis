@extends('frontend.frontend_master')

@section('frontend_content')
    <style>
        .platform-content input,
        .platform-content select,
        .platform-content textarea {
            padding: 12px;
            border: 1px solid #aaaaaa;
        }

        .platform-content input::placeholder,
        .platform-content textarea::placeholder {
            text-transform: capitalize;
        }
    </style>
    <!-- breadcrumb start -->
    <div class="breadcrumb-area p-2" style="background-color: #FED000;">
        <ul class="d-flex align-items-center gap-3 container-fluid">
            <li><a href="{{ url('/') }}" class="fw-semibold">Home <i class="fa fa-play" style="font-size: 10px;"></i></a>
            </li>
            <li>Career</li>
        </ul>
    </div>
    <!-- breadcrumb endstart -->

    <!-- page banner -->
    <div class="page-banner" style="background-image: url({{ asset('frontend/images/page-banner/about.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h2>Career</h2>
            </div>
        </div>
    </div>
    <!-- page banner -->
    <!-- about content -->
    <main class="main-area py-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="media-content">
                        <h2 class="page_title"><span>find your dream job </span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <div class="platform-content">
                        <div class="social__media_job mt-5">
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="single_job card text-center p-3">
                                        <a href="">
                                            <img src="images/career/facebook.gif" alt="" loading="lazy">
                                            <h4>connect with facebook</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure
                                                dolor at culpa modi accusantium quod dolorum eos, nostrum maxime ex!
                                                Sequi, velit. Magni voluptatum quaerat asperiores natus at expedita.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="single_job card text-center p-3">
                                        <a href="">
                                            <img src="images/career/linkedin.gif" alt="" loading="lazy">
                                            <h4>connect with linkedin</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure
                                                dolor at culpa modi accusantium quod dolorum eos, nostrum maxime ex!
                                                Sequi, velit. Magni voluptatum quaerat asperiores natus at expedita.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="submit_form mt-5" style="max-width: 500px;margin: auto;">
                            <h2 class="text-center text-uppercase fw-bold">build your career with us</h2>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('career.page.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-3">
                                    <label for="name"><b>Name</b></label>
                                    <input type="text" name="name" class="form-control" placeholder="enter Name">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email"><b>Email</b></label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label for="phone"><b>Phone</b></label>
                                    <input type="text" name="phone" class="form-control" placeholder="enter Name">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="career"><b>Career</b></label>
                                    <select name="career" id="career" class="form-select">
                                        <option value="">Select Career</option>
                                        @foreach ($data as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="cv"><b>Upload CV/Resume</b></label>
                                    <input type="file" class="form-control" name="cv">
                                    @error('cv')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- about content -->
@endsection
