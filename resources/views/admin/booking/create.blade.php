@extends('admin.layouts.master')
@section('title', 'Halaman Input Booking')
@section('booking', 'active')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Booking Baru</h1>
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
                        <form action="{{ route('bookings.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="1">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Pemilik Kendaraan</label>
                                    <div class="col-12">
                                        <select name="user_id" id="user_id" class="form-control" required multiple>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
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
                                                <option value="{{ $place->id }}">{{ $place->placeName }}</option>
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
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block px-5"><i class="fas fa-plus"></i> Tambah Booking Baru</button>
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
                                // $("#vehicle_id").append('<option>Select City</option>');
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