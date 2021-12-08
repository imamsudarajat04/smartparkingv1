@extends('admin.layouts.master')
@section('title', 'Halaman Input Parkir')
@section('parking', 'active')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Parkiran Baru</h1>
            <a href="{{ route('parkings.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-caret-left"></i> Kembali</a>
        </div>

        <!-- Alert -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="my-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="{{ route('parkings.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Wilayah Parkir</label>
                                    <div class="col-12">
                                        <select name="place_id" class="form-control" required multiple>
                                            @foreach ($places as $place)
                                                <option value="{{ $place->id }}">{{ $place->placeName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Kategori Kendaraan</label>
                                    <div class="col-12">
                                        <select name="category_vehicle_id" class="form-control" required multiple>
                                            @foreach ($categoryVehicles as $categoryVehicle)
                                                <option value="{{ $categoryVehicle->id }}">{{ $categoryVehicle->transportaionType }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Stok Parkir</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="parkingStock" placeholder="Masukan Stok Parkir" value="{{ old('parkingStock') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Harga Parkir</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="parkingPrice" placeholder="Masukan Harga Parkir" value="{{ old('parkingPrice') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block px-5"><i class="fas fa-plus"></i> Tambah Parkir Baru</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection