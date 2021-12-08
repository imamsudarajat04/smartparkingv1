@extends('admin.layouts.master')

@section('title','Halaman Edit User')
@section('users', 'active')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
            <a href="{{ route('users.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-caret-left"></i> Kembali</a>
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
                        <form action="{{ route('users.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Nama Lengkap</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="name" placeholder="Masukan Nama User" value="{{ old('name', $data->name) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Email</label>
                                    <div class="col-12">
                                        <input type="email" class="form-control" name="email" placeholder="Masukan Email User" value="{{ old('email', $data->email) }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Tanggal Lahir</label>
                                    <div class="col-12">
                                        <input type="date" class="form-control" name="dateBirth" value="{{ old('dateBirth', $data->dateBirth) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Jenis Kelamin</label>
                                    <div class="col-12">
                                        <select name="gender" class="form-control" required>
                                            @if ($data->gender == "Male")   
                                                <option value="" disabled>Pilih</option> 
                                                <option value="Male" selected>Laki-laki</option>
                                                <option value="Female">Perempuan</option>
                                            @endif
                                            @if ($data->gender == "Female")
                                                <option value="" disabled>Pilih</option>
                                                <option value="Male">Laki-laki</option>
                                                <option value="Female" selected>Perempuan</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Alamat</label>
                                    <div class="col-12">
                                        <textarea name="address" class="form-control" cols="30" rows="10">{{ old('address', $data->address) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Nomor HP</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="phone" placeholder="Masukan Nomor HP" value="{{ old('phone', $data->phone) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Password</label>
                                    <div class="col-12">
                                        <input type="password" class="form-control" name="password" placeholder="Masukan Password User" value="{{ old('password') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Konfirmasi Password</label>
                                    <div class="col-12">
                                        <input type="password" class="form-control" name="confirm-password" placeholder="Konfirmasi Password User" value="{{ old('confirm-password') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12 control-label">Role</label>
                                    <div class="col-12">
                                        <select name="role" class="form-control">
                                            @if($data->role == "Admin")
                                                <option value="" disabled="disabled">Pilih</option>
                                                <option value="Admin" selected>Admin</option>
                                                <option value="Users">User</option>
                                            @endif
                                            @if ($data->role == "Users")
                                                <option value="" disabled="disabled">Pilih</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Users" selected>User</option>
                                            @endif
                                        </select>
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