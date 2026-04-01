@extends('layouts.app')

@section('title', 'Create')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Buat Kategori Alat</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('kategori.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nama Kategori</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="name_kategori" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Deskripsi</label>
                                            <div class="col-lg-9">
                                                <textarea name="deskripsi" rows="4" cols="5" class="form-control" placeholder="Opsional" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
