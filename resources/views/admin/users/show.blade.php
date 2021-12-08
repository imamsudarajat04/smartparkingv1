@extends('admin.layouts.master')

@section('title', 'Halaman Detail User')
@section('users','active')

@push('customcss')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail : {{ $data->name }}</h1>
        <div class="pull-right">
            <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('users.index') }}"><i class="fas fa-caret-left"></i> Kembali</a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row details-pendaftaran">
                        <div class="col-12 col-md-10">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="title">Nama Lengkap</div>
                                    <div class="subtitle">{{ $data->name }}</div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="title">Tanggal Lahir</div>
                                    <div class="subtitle">{{ \Carbon\Carbon::parse($data->dateBirth)->format('d/m/Y') }}</div>
                                </div>
                            </div></br>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="title">Jenis Kelamin</div>
                                    @if ($data->gender == "Male")
                                        <div class="subtitle">Laki-Laki</div>
                                    @endif
                                    @if ($data->gender == "Female")
                                        <div class="subtitle">Perempuan</div>
                                    @endif
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="title">No. HP / WA</div>
                                    <div class="subtitle">{{ $data->phone }}</div>
                                </div>
                            </div></br>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="title">Alamat</div>
                                    <div class="subtitle">{{ $data->address }}</div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="title">Role</div>
                                    <div class="subtitle">{{ $data->role }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection