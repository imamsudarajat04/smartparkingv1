@extends('users.layouts.master')

@section('title','Halaman Kendaraan')
@section('cover', 'Halaman Data Kendaraan')
@section('sub', 'Diwajibkan untuk mengiisi data kendaraan pribadi.')

@section('content')
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
    <!-- End of Alert -->

    <form action="{{ route('cek-vehicle.vehiclestore', Auth::user()->id) }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="role" value="{{ Auth::user()->role }}">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="user_id" value="{{ old('name', Auth::user()->name) }}" readonly>
          </div>
          <div class="form-group col-md-6">
            <label>Kategori Kendaraan</label>
            <select class="form-control" name="category_vehicles_id" required>
                <option value="">Pilih Kategori Kendaraan</option>
                @foreach ($category_vehicles as $category_vehicle)
                    <option value="{{ $category_vehicle->id }}">{{ $category_vehicle->transportaionType }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Nomor Plat Kendaraan</label>
                <input type="text" class="form-control" name="platNumber" value="{{ old('platNumber') }}" placeholder="Masukan Plat Nomor Kendaraan" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
        <a href="/bookings-user" class="btn btn-danger btn-block">Kembali</a>
    </form>
@endsection