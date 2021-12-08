@extends('users.layouts.master')

@section('title','Halaman Booking')
@section('cover', 'Halaman Data Booking')
@section('sub', 'Diwajibkan untuk mengiisi data booking.')

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

    <form action="{{ route('cek-booking.bookingstore', Auth::user()->id) }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="status" value="1">
        {{-- <input type="hidden" name="role" value="{{ Auth::user()->role }}"> --}}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="user_id" value="{{ old('user_id', Auth::user()->name) }}" readonly>
          </div>
          <div class="form-group col-md-6">
            <label>Lokasi Tempat</label>
            <select class="form-control" name="place_id" required>
                <option value="" disabled selected>Pilih Lokasi</option>
                @foreach ($places as $place)
                    <option value="{{ $place->id }}">{{ $place->placeName }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Plat Nomor Kendaraan</label>
                <select class="form-control" name="vehicle_id" required>
                    <option value="" disabled selected>Pilih Plat Nomor Kendaraan</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}">{{ $vehicle->platNumber }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Jumlah Beli Parkiran</label>
                <select class="form-control" name="quantity" required>
                    <option value="" disabled selected>Pilih Jumlah Beli Parkiran</option>
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
        <a href="/bookings-user" class="btn btn-danger btn-block">Kembali</a>
    </form>
@endsection