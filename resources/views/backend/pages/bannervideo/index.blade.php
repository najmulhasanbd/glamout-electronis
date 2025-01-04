@extends('backend.backend_master')

@section('backend')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Banner Video</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Banner Video</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.banner.update', $bannervideo->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label for="video">Upload Video:</label>
                            <input type="file" class="form-control" name="video" id="video" accept="video/*" required>
                            <button class="btn btn-success mt-2" type="submit">Upload</button>
                        </form>                                             
                    </div>
                    <div class="col-12 mt-3">
                        <video autoplay loop muted style="width: 100%; height: 50vh; object-fit: cover;">
                            <source src="{{ asset('upload/banner-video/' . $bannervideo->video) }}" type="video/mp4">
                                <source src="{{ asset('upload/banner-video/' . $bannervideo->video) }}" type="video/ogg">
                                <source src="{{ asset('upload/banner-video/' . $bannervideo->video) }}" type="video/webm">
                                Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
