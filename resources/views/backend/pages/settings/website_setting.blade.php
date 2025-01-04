@extends('backend.backend_master')

@section('backend')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Website Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Website Settings</li>
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
                        <div class="card p-3">
                            <!-- /.card-header -->
                            <form action="{{ route('admin.setting.update', $setting->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $setting->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" class="form-control"
                                                value="{{ $setting->address }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="number" name="phone" class="form-control"
                                                value="{{ $setting->phone }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="whatsapp">Whatsapp</label>
                                            <input type="text" name="whatsapp" class="form-control"
                                                value="{{ $setting->whatsapp }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="messanger">Messanger</label>
                                            <input type="text" name="messanger" class="form-control"
                                                value="{{ $setting->messanger }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" name="facebook" class="form-control"
                                                value="{{ $setting->facebook }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                                <textarea name="description" id="description" cols="30" class="form-control" rows="2">{!! $setting->description !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="linkedin">Linkedin</label>
                                            <input type="text" name="linkedin" class="form-control"
                                                value="{{ $setting->linkedin }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="youtube">Youtube</label>
                                            <input type="text" name="youtube" class="form-control"
                                                value="{{ $setting->youtube }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" name="instagram" class="form-control"
                                                value="{{ $setting->instagram }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" name="twitter" class="form-control"
                                                value="{{ $setting->twitter }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="logo">Logo</label>
                                            <input type="file" name="logo" class="form-control">
                                            <img src="{{ asset('upload/logo/' . $setting->logo) }}" alt="">

                                        </div>
                                        <div class="form-group">
                                            <label for="favicon">Favicon</label>
                                            <input type="file" name="favicon" class="form-control">
                                            <img src="{{ asset('upload/favicon/' . $setting->favicon) }}" alt="">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Update</button>

                            </form>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
