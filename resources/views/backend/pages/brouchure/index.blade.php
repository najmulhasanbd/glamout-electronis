@extends('backend.backend_master')

@section('backend')
    <style>
        td {
            vertical-align: middle
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contact Message</h1>
                    </div>

                    <div class="col-sm-6" style="text-align: end">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#addBrouchue" class="btn btn-success">Add
                            Brouchue</a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="addBrouchue" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Brouchue</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.brouchure.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="thumbnail">Thumbnail</label>
                                            <input type="file" name="thumbnail" class="form-control" accept="image/*"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pdf">PDF</label>
                                            <input type="file" name="pdf" class="form-control" accept=".pdf"
                                                required>
                                        </div>
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Thumbnail</th>
                                            <th>PDF</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brouchure as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <img src="{{ asset('upload/brouchure/thumbnails/' . $item->thumbnail) }}"
                                                        style="width: 50px" alt="">
                                                </td>
                                                <td>
                                                    @if ($item->pdf)
                                                        <a href="{{ asset('upload/brouchure/pdfs/' . $item->pdf) }}"
                                                            target="_blank" class="btn btn-primary btn-sm">
                                                            View PDF
                                                        </a>
                                                        <a href="{{ asset('upload/brouchure/pdfs/' . $item->pdf) }}"
                                                            download class="btn btn-success btn-sm">
                                                            Download PDF
                                                        </a>
                                                    @else
                                                        <span class="text-muted">No PDF available</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class="d-flex" style="gap: 5px">
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                            data-target="#update{{ $item->id }}"
                                                            class="btn btn-sm btn-success">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('admin.brouchure.destroy', $item->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this Brouchure?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal -->
                                            <div class="modal fade" id="update{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Brouchure
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.brouchure.update', $item->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT') <!-- PUT method for update -->
                                                                <div class="form-group">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" name="name"
                                                                        class="form-control" value="{{ $item->name }}"
                                                                        placeholder="Enter name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="thumbnail">Thumbnail</label>
                                                                    <input type="file" name="thumbnail"
                                                                        class="form-control" accept="image/*">
                                                                    <img src="{{ asset('upload/brouchure/thumbnails/' . $item->thumbnail) }}"
                                                                        width="80px" alt="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pdf">PDF</label>
                                                                    <input type="file" name="pdf"
                                                                        class="form-control">
                                                                    @if ($item->pdf)
                                                                        <small>Current File: <a
                                                                                href="{{ asset('upload/brouchure/' . $item->pdf) }}"
                                                                                target="_blank">{{ $item->pdf }}</a></small>
                                                                    @endif
                                                                </div>
                                                                <button class="btn btn-success"
                                                                    type="submit">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
