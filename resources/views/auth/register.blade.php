@extends('auth.layouts.master')

@section('title', 'Halaman Register')

@section('content')
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                <p class="text-center small">Enter your personal details to create account</p>
              </div>

              <form class="row g-3 needs-validation" method="POST" action="{{ route('register.store') }}" novalidate>
                @csrf
                <div class="col-12">
                  <label for="yourName" class="form-label">Nama Lengkap</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                  <div class="invalid-feedback">Please, enter your name!</div>
                </div>

                <div class="col-12">
                  <label for="yourEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" required>
                  <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                </div>

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" required>
                  <div class="invalid-feedback">Please enter your password!</div>
                </div>

                <div class="col-12">
                    <label for="yourPhone" class="form-label">Nomor Handphone</label>
                    <input type="text" name="phone" class="form-control" id="phone" required>
                    <div class="invalid-feedback">Please enter your phone!</div>
                </div>

                <div class="col-12">
                    <label for="yourDateofBirth" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="dateBirth" class="form-control" id="dateBirth" required>
                    <div class="invalid-feedback">Please enter your date of birth!</div>
                </div>

                <div class="col-12">
                    <label for="yourGender" class="form-label">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="" selected disabled>==Pilih==</option>
                        <option value="Male">Laki-laki</option>
                        <option value="Female">Perempuan</option>
                    </select>
                    <div class="invalid-feedback">Please enter your gender!</div>
                </div>
                
                <div class="col-12">
                    <label for="yourAddress" class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control" id="address" required>
                    <div class="invalid-feedback">Please enter your address!</div>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                    <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                  </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Create Account</button>
                </div>
                <div class="col-12">
                  <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
    </div>

</section>
@endsection