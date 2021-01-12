@extends('layouts.app')

@section('content')
<div style="min-height: calc(100vh - 58px)" class="container d-flex justify-content-between">
    <div class="d-flex flex-column justify-content-center">
        <div>
            <h1 style="font-size: 68px;">Donasi Untuk</h1>
            <h1 class="mb-5" style="color: #0253B3; line-height: 30px; font-size: 68px;">Lembiru.id</h1>
        </div>

        <p style="font-size: 24px;">Dukung kami untuk terus menghubungkan orang-orang <br>
            baik di seluruh Indonesia, serta untuk menggerakkan <br>
            proses digitalisasi Indonesia.</p>
        <div class="d-flex" style="justify-content: flex-end">
            <img src="{{ asset('asset/loginVector.png') }}" alt="" style="width: 300px; height: 212px;">
        </div>
    </div>

    <div class="row justify-content-end">
        <div class="d-flex align-items-center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <input style="background-color: #EFF2F4; border-color: #EFF2F4; width: 25vw; height: 3vw; padding: 25px;" placeholder="Email address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <input style="background-color: #EFF2F4; border-color: #EFF2F4; width: 25vw; height: 3vw; padding: 25px;" placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <button class="btn-lg mt-3" style="background-color: #0253B3; width: 212px; color: #FFFFFF; border-color:#0253B3; width: 25vw;">
                    Masuk
                </button>

                <div class="text-center mt-4">
                    <p>atau dengan</p>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <span class="border" style="border-radius: 10px; padding: 10px 20px;">
                        <a href="/register">
                            <img src="{{ asset('asset/logoGoogle.png') }}" alt="" style="margin-top: 5px;">
                        </a>
                    </span>

                    <span class="border" style="border-radius: 10px; padding: 10px 20px;">
                        <a href="/register">
                            <img src="{{ asset('asset/logoApple.png') }}" alt="">
                        </a>
                    </span>

                    <span class="border" style="border-radius: 10px; padding: 10px 20px;">
                        <a href="/register">
                            <img src="{{ asset('asset/logoFb.png') }}" alt="">
                        </a>
                    </span>
                </div>

                <div class="d-flex mt-4 justify-content-center">
                    <p>Belum punya akun?&nbsp</p>
                    <a href="{{ route('register') }}">
                        <p>Registrasi di sini.</p>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection