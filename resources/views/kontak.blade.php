@extends('layouts.app')

@section('content')
    <div class="container mt-4 d-flex justify-content-between">
        <div class="col-8">
            <img src="{{ asset('asset/elipseVector.png') }}" alt="" style="position: absolute; width: 250px; height: 250px;">
            <div class="mt-5 ml-5">
                <h1 style="font-size: 68px;">Hubungi Kami</h1>
                <h1 class="mb-5" style="line-height: 30px; font-size: 68px;">Untuk Bertanya</h1>
            </div>

            <div class="d-flex" style="justify-content: flex-end">
                <img src="{{ asset('asset/contactVector.png') }}" alt="" style="width: 500px; height: 332px;">
            </div>
        </div>

        <div class="col-4">
            <h3 class="mb-4 font-weight-bold">Tulis Pesan Kamu Disini</h3>
            <form action='/kontak/submit' method="post">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <input style="background-color: #EFF2F4; border-color: #EFF2F4; width: 25vw; height: 3vw; padding: 25px;"
                            placeholder="Nama" id="email" type="text" class="form-control" name="name" value="{{ old('name') }}"
                            required autocomplete="name" autofocus>
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

                <div class="form-group">
                    <textarea style="background-color: #EFF2F4; border-color: #EFF2F4; width: 25vw; height: 3vw; padding: 25px; padding-bottom: 200px;"
                        placeholder="Pesan" id="pesan" name="pesan" class="form-control @error('pesan') is-invalid @enderror" rows="3"></textarea>
                    @error('pesan')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <button class="btn-lg mt-3" style="background-color: #0253B3; width: 212px; color: #FFFFFF; border-color:#0253B3; width: 25vw;">
                    Kirim
                </button>
            </form>
        </div>
    </div>
@endsection
