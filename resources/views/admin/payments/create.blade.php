@extends('admin.layouts.master')
@section('title', 'Halaman Input Pembayaran')
@section('payments', 'active')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Pembayaran Baru</h1>
            <a href="{{ route('payments.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-caret-left"></i> Kembali</a>
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
                        <form action="{{ route('payments.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Pembeli</label>
                                    <div class="col-12">
                                        <select name="user_id" class="form-control" required multiple>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Nomor Booking</label>
                                    <div class="col-12">
                                        <select name="booking_id" id="booking_id" class="form-control" required>
                                            <option value="" selected disabled>Pilih Nomor Booking</option>
                                            @foreach($bookings as $booking)
                                                <option value="{{ $booking->id }}">{{ $booking->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Metode Pembayaran</label>
                                    <div class="col-12">
                                        <select name="payment_method" class="form-control" required>
                                            <option value="" selected disabled>Pilih Metode Pembayaran</option>
                                            <option value="Transfer">Transfer</option>
                                            <option value="Dana">Dana</option>
                                            <option value="OVO">OVO</option>
                                            <option value="Gopay">Gopay</option>
                                            <option value="LinkAja">LinkAja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Foto Bukti Pembayaran</label>
                                    <div class="col-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="transferPhoto" id="customFile"/>
                                            <label class="custom-file-label" for="customFile">Pilih Foto Bukti Pembayaran</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <label class="col-12 control-label">Tanggal Pembayaran</label>
                                            <div class="col-12">
                                                <input type="date" class="form-control" name="payment_date" id="payment_date" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Status Pembayaran</label>
                                    <div class="col-12">
                                        <select name="status" class="form-control" required>
                                            <option value="" selected disabled>Pilih Status Pembayaran</option>
                                            <option value="pending">Belum Dibayar</option>
                                            <option value="paid">Sudah Dibayar</option>
                                            <option value="canceled">Cancel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block px-5"><i class="fas fa-plus"></i> Tambah Pembayaran Baru</button>
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