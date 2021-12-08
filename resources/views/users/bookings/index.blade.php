@extends('users.layouts.master')

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

<form action="{{ route('bookings-user.update', Auth::user()->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="role" value="{{ Auth::user()->role }}">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', Auth::user()->name) }}" placeholder="Masukan Nama Lengkap" required>
      </div>
      <div class="form-group col-md-6">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="{{ old('email', Auth::user()->email) }}" placeholder="Masukan Email" required>
      </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label>Nomor Handphone</label>
          <input type="text" class="form-control" name="phone" value="{{ old('phone', Auth::user()->phone) }}" placeholder="Masukan Nomor Handphone" required>
        </div>
        <div class="form-group col-md-6">
          <label>Tanggal Lahir</label>
          <input type="date" class="form-control" name="dateBirth" value="{{ old('dateBirth', Auth::user()->dateBirth) }}" required>
        </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Jenis Kelamin</label>
        <select name="gender" class="form-control" required>
          <option value="" disabled selected>==Pilih==</option>
          @if (Auth::user()->gender == "Male")
            <option value="Male" selected>Laki-laki</option>
            <option value="Female">Perempuan</option>
          @endif
          @if (Auth::user()->gender =="Female")
            <option value="Male">Laki-laki</option>
            <option value="Female" selected>Perempuan</option>
          @endif
        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Alamat</label>
        <input type="text" class="form-control" name="address" value="{{ old('address', Auth::user()->address) }}" placeholder="Masukan Alamat" required>
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
</form>
@endsection