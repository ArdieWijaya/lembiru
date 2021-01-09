@extends('layouts.app')

@section('content')
<div class="container mt-4 d-flex justify-content-between">
    <div>
        <div>
            <h1 style="font-size: 68px;">Ayo gabung bersama</h1>
            <h1 class="mb-5" style="color: #0253B3; line-height: 30px; font-size: 68px;">Lembiru.id</h1>
        </div>

        <p style="font-size: 24px;">Dengan bergabung dan berdonasi bersama kami, <br>
            Anda dapat membantu mewujudkan visi kami, yaitu <br> 
            mendigitalisasikan Indonesia.</p>
        <div class="d-flex" style="justify-content: flex-end">
            <img src="{{ asset('asset/regisVector.png') }}" alt="" style="width: 350px; height: 224px;">
        </div>
    </div>

    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <div class="d-flex align-items-center">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <input style="background-color: #EFF2F4; border-color: #EFF2F4; width: 25vw; height: 3vw; padding: 25px;" 
                            placeholder="Nama Anda" id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                            name="email" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <input style="background-color: #EFF2F4; border-color: #EFF2F4; width: 25vw; height: 3vw; padding: 25px;" 
                            placeholder="Email address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <input style="background-color: #EFF2F4; border-color: #EFF2F4; width: 25vw; height: 3vw; padding: 25px;" placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <input style="background-color: #EFF2F4; border-color: #EFF2F4; width: 25vw; height: 3vw; padding: 25px;" placeholder="Konfirmasi Password Anda" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <button class="btn-lg mt-3" style="background-color: #0253B3; width: 212px; color: #FFFFFF; border-color:#0253B3; width: 25vw;">
                    Register
                </button>

                <div class="d-flex mt-4 justify-content-center">
                    <p>Sudah punya akun?&nbsp</p>
                    <a href="{{ route('login') }}"><p>Login di sini.</p></a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
