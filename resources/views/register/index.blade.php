@extends('layouts.main')

@section('container')

<main class="container form-registration">
    <div class="card" style="margin-top: 81px; padding: 16px;">
        <div class="row align-items-center justify-content-center mt-4 mb-5">
            <div class="col-lg-5">
                <div class="">
                    <h1 class="mb-3 fw-normal">Daftar</h1>
                </div>
                <form action="/register" method="post">
                    @csrf  {{--untuk mengamankan form register --}}
                    <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="masukkan nama anda" required value="{{ old('name') }}">
                    <label for="name">Nama</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="masukkan nama pengguna anda" required value="{{ old('username') }}">
                        <label for="username">Nama Pengguna</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="nama@contoh.com" required value="{{ old('email') }}">
                        <label for="email">Alamat Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="masukkan kata sandi" required>
                    <label for="password">Kata Sandi</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                    <button class="btn btn-primary w-100 mb-2" style="background-color: #003F7D; border: none;" type="submit">Daftar</button>
                </form>
                <small class="d-block text-center mt-2">Sudah memiliki akun? <a style="text-decoration: none;" href="/login">Silahkan Login</a></small>
                </div>

                <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0 text-center">
                    <img src="img/image9.png" alt="" class="img-fluid">
                </div>
        </div>
    </div>
</main>

@endsection
