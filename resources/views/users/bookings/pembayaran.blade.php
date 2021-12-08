@extends('users.layouts.master')

@section('title', 'Halaman Pembayaran')
@section('cover','Pembayaran')
@section('sub','Pembayaran dapat menggunakan transfer bank atau melalui rekening bank yang sudah terdaftar atau aplikasi pembayaran yang lainnya.')

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

    <form action="{{ route('pembayaran.pembayaranstore', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="status" value="1">
        {{-- <input type="hidden" name="role" value="{{ Auth::user()->role }}"> --}}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', Auth::user()->name) }}" readonly>
          </div>
          <div class="form-group col-md-6">
            <label>Nomor Booking</label>
            <select class="form-control" name="booking_id" required>
                <option value="" disabled selected>Pilih Nomor Booking</option>
                @foreach ($bookings as $booking)
                    <option value="{{ $booking->id }}">{{ $booking->id }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Metode Pembayaran</label>
                <select name="payment_method" class="form-control" required>
                    <option value="" selected disabled>Pilih Metode Pembayaran</option>
                    <option value="Transfer">Transfer</option>
                    <option value="Dana">Dana</option>
                    <option value="OVO">OVO</option>
                    <option value="Gopay">Gopay</option>
                    <option value="LinkAja">LinkAja</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Foto Bukti Pembayaran</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="transferPhoto" id="customFile"/>
                    <label class="custom-file-label" for="customFile">Pilih Foto Bukti Pembayaran</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Tanggal Pembayaran</label>
                <input type="date" class="form-control" name="payment_date" value="{{ old('payment_date') }}" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
        <a href="{{ route('cek-all.cekall', Auth::user()->id) }}" class="btn btn-danger btn-block">Kembali</a>
    </form>
@endsection

@push('customjs')
    <script>
        $('#customFile').on('change', function() {
            //get the file name
            var fileName = $(this).val();
            //clean fake path
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(cleanFileName);
        });
    </script>
@endpush