@extends('layouts.app')

@section('content')
<div style="min-height: calc(100vh - 58px)" class="container d-flex justify-content-between">
    <div class="d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-start">
            <img src="{{ asset('asset/donasiVector.png') }}" alt="" style="width: 500px; height: 330px;">
        </div>

        <div>
            <h1 style="font-size: 52px;">Masukkan nominal dan dukung Lembiru.id</h1>
            <img src="{{ asset('asset/elipseVector.png') }}" alt="" style="right: 47rem; bottom: 3rem; position: absolute; width: 200px; height: 200px;">
        </div>
    </div>

    <div class="row justify-content-end">
        <div class="d-flex align-items-center">
            <form action='/donasi/send' method="post">
                @csrf
                <div class="form-group row">
                    <div class="col mb-3">
                        <span style="background-color: #EFF2F4; border-color: #EFF2F4; padding: 25px;">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 21.7vw;">
                                <label class="btn btn-light">
                                    <input type="radio" name="money" id="money" value="50000" checked> 50K
                                </label>

                                <label class="btn btn-light">
                                    <input type="radio" name="money" id="money" value="100000"> 100K
                                </label>

                                <label class="btn btn-light">
                                    <input type="radio" name="money" id="money" value="200000"> 200K
                                </label>

                                <label class="btn btn-light">
                                    <input type="radio" name="money" id="money" value="500000"> 500K
                                </label>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col mb-3 d-flex">
                        <span style="background-color: #EFF2F4; border-color: #EFF2F4; padding: 25px;">
                            <div class="d-flex flex-row align-items-center justify-content-between" style="width: 21.7vw">
                                <img src="{{ asset('asset/creditCard.png') }}" alt="" style="width: 30px; height: 25px;">
                                <input class="form-control @error('cardno') is-invalid @enderror" style="background-color: #EFF2F4; border-color: #EFF2F4; width: 13.9vw;" name="cardno" id="cardno" placeholder="0000-0000-0000-0000">
                                <img src="{{ asset('asset/visa.png') }}" alt="" style="width: 35px;">
                                <img src="{{ asset('asset/mastercard.png') }}" alt="" style="width: 35px;">
                                @error('cardno')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </span>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="form-group row">
                        <div class="col mb-3 d-flex">
                            <span style="background-color: #EFF2F4; border-color: #EFF2F4; padding: 25px;">
                                <div class="d-flex flex-row align-items-center" style="width: 8vw">
                                    <img class="mr-2" src="{{ asset('asset/calendar.png') }}" alt="" style="width: 25px;">
                                    <input class="form-control @error('exp') is-invalid @enderror" name="exp" id="exp" style="background-color: #EFF2F4; border-color: #EFF2F4; width: 6.5vw;" placeholder="MMYYYY">
                                    @error('exp')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col mb-3 d-flex">
                            <span style="background-color: #EFF2F4; border-color: #EFF2F4; padding: 25px;">
                                <div class="d-flex flex-row align-items-center" style="width: 8vw">
                                    <img class="mr-2" src="{{ asset('asset/lock.png') }}" alt="" style="width: 20px;">
                                    <input class="form-control @error('cvv') is-invalid @enderror" name="cvv" id="cvv" style="background-color: #EFF2F4; border-color: #EFF2F4; width: 4vw;" placeholder="123">
                                    @error('cvv')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </span>
                        </div>
                    </div>
                </div>


                <button class="btn-lg mt-3" style="background-color: #0253B3; width: 212px; color: #FFFFFF; border-color:#0253B3; width: 25vw;">
                    Donasi
                </button>

                <div class="text-center mt-4">
                    <p>atau donasi melalui</p>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <span class="border" style="border-radius: 10px; padding: 10px 20px;">
                        <a href="/">
                            <img src="{{ asset('asset/GoPay.png') }}" alt="" style="margin-top: 7px;">
                        </a>
                    </span>

                    <span class="border" style="border-radius: 10px; padding: 10px 20px;">
                        <a href="/">
                            <img src="{{ asset('asset/OVO.png') }}" alt="" style="margin-top: 7px;">
                        </a>
                    </span>

                    <span class="border" style="border-radius: 10px; padding: 10px 20px;">
                        <a href="/">
                            <img src="{{ asset('asset/DANA.png') }}" alt="" style="margin-top: 5px;">
                        </a>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
