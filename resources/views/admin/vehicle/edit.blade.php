@extends('admin.layouts.master')

@section('title','Halaman Edit Kendaraan')
@section('vehicles', 'active')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Kendaraan</h1>
            <a href="{{ route('vehicles.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-caret-left"></i> Kembali</a>
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
                        <form action="{{ route('vehicles.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Nama Pemilik Kendaraan</label>
                                    <div class="col-12">
                                        <select name="user_id" class="form-control" required multiple>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}" {{ $user->id == $data->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Kategori Kendaraan</label>
                                    <div class="col-12">
                                        <select name="category_vehicles_id" class="form-control" required multiple>
                                            @foreach ($categoryVehicles as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $data->category_vehicles_id  ? 'selected' : '' }}>{{ $category->transportaionType }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Plat Nomor Kendaraan</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="platNumber" value="{{ old('platNumber', $data->platNumber) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-edit"></i> Ubah Data</button>
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