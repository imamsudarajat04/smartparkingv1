@extends('admin.layouts.master')

@section('title','Halaman Edit Booking')
@section('booking', 'active')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Tempat Parkir</h1>
            <a href="{{ route('bookings.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-caret-left"></i> Kembali</a>
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
                        <form action="{{ route('bookings.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Pemilik Kendaraan</label>
                                    <div class="col-12">
                                        <select name="user_id" id="user_id" class="form-control" required multiple>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}"{{ $user->id == $data->user_id ? 'selected' : null }}>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Plat Nomor Kendaraan</label>
                                    <div class="col-12">
                                        <select name="vehicle_id" id="vehicle_id" class="form-control" required>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Wilayah Parkir</label>
                                    <div class="col-12">
                                        <select name="place_id" class="form-control" required>
                                            <option value="" selected disabled>Pilih Wilayah Parkir</option>
                                            @foreach ($places as $place)
                                                <option value="{{ $place->id }}" {{ $place->id == $data->place_id ? 'selected' : null }} >{{ $place->placeName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Jumlah Beli Parkir</label>
                                    <div class="col-12">
                                        <select name="quantity" id="quantity" class="form-control" required>
                                            <option value="" selected disabled>Pilih Jumlah Beli Parkir</option>
                                            @for ($i = 1; $i <= 10; $i++)
                                                <option value="{{ $i }}" {{ $i == $data->quantity ? 'selected' : null }} >{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Status Parkir</label>
                                    <div class="col-12">
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="" selected disabled>Pilih Status Parkir</option>
                                            @if ($data->status == 0)
                                                <option value="0" selected>Belum dibooking</option>
                                                <option value="1">Sudah Dibooking</option>
                                                <option value="2">Sudah Teriisi</option>
                                            @endif
                                            @if ($data->status == 1)
                                                <option value="0">Belum dibooking</option>
                                                <option value="1" selected>Sudah Dibooking</option>
                                                <option value="2">Sudah Teriisi</option>
                                            @endif
                                            @if ($data->status == 2)
                                                <option value="0">Belum dibooking</option>
                                                <option value="1">Sudah Dibooking</option>
                                                <option value="2" selected>Sudah Teriisi</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>
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

@push('customjs')
    <script>
        $(document).ready(function() {
            $('#user_id').on('change', function() {
                var user_id = $(this).val();
                if(user_id) {
                    $.ajax({
                        url: '/getVehicle/'+user_id,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data) {
                            $('#vehicle_id').empty();
                            $.each(data, function(key, value) {
                                $('#vehicle_id').append('<option value="'+ value.id +'">'+ value.platNumber +'</option>');
                            });
                        }
                    });
                } else {
                    $('#vehicle_id').empty();
                }
            })
        });
    </script>
@endpush