@extends('layouts.app')

@section('title', 'Kategori')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">
                        <i class="fe fe-tag me-2"></i> Kategori Alat
                    </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">
                                <i class="fe fe-home"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Kategori Alat</li>
                    </ul>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                <i class="fe fe-check-circle me-1"></i> {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="card-title mb-1">
                                    <i class="fe fe-box me-1"></i> Kelola Kategori Alat
                                </h4>
                                <p class="card-text mb-0">
                                    Menampilkan dan mengatur <code>kategori alat</code> dalam sistem
                                </p>
                            </div>
                            <a href="{{ route('kategori.create') }}" class="btn btn-primary">
                                <i class="fe fe-plus me-1"></i> Tambah Kategori
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal Dibuat</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name_kategori }}</td>
                                            <td>{{ $item->deskripsi ?? '-' }}</td>
                                            <td>{{ $item->created_at->format('d F Y') }}</td>
                                            <td class="text-center">
                                                {{-- Edit --}}
                                                <a href="{{ route('kategori.edit', $item->id) }}"
                                                   class="btn btn-sm btn-outline-primary me-1"
                                                   title="Edit">
                                                    <i class="fe fe-edit"></i> Edit
                                                </a>

                                                {{-- Hapus --}}
                                                <a href="#"
                                                   class="btn btn-sm btn-outline-danger"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#deleteModal{{ $item->id }}"
                                                   title="Hapus">
                                                    <i class="fe fe-trash"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted py-3">
                                                <i class="fe fe-inbox me-1"></i>
                                                Tidak ada data kategori
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

{{-- ======= MODAL HAPUS (di luar tabel & page-wrapper) ======= --}}
@foreach ($categories as $item)
    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title text-danger">
                        <i class="fe fe-alert-triangle me-1"></i> Konfirmasi Hapus
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center pt-2">
                    <p class="mb-1">
                        Yakin hapus kategori <b>{{ $item->name_kategori }}</b>?
                    </p>
                    <small class="text-muted">Data tidak bisa dikembalikan.</small>
                </div>

                <div class="modal-footer justify-content-center border-0">
                    <button type="button"
                            class="btn btn-secondary btn-sm"
                            data-bs-dismiss="modal">
                        <i class="fe fe-x me-1"></i> Batal
                    </button>

                    <form action="{{ route('kategori.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fe fe-trash me-1"></i> Ya, Hapus
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endforeach

@endsection