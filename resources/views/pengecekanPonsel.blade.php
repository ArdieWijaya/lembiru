@extends('layouts.app')

@section('content')
    <div style="min-height: calc(100vh - 58px)" class="container d-flex">
        <div class="container d-flex align-items-center" style="margin-bottom: 3rem;">
            <div class="row">
                <div class="col-6" style="position: sticky">
                    <img src="{{ asset('asset/elipseVector.png') }}" alt="" style="top: -20px; left: 10px; position: absolute; width: 200px; height: 200px;">
                    <div class="mt-4 ml-5">
                        <h1 style="font-size: 1.8rem; font-weight: bolder;">Pengecekan Kondisi Ponsel</h1>
                        <p>Sebelum kami menerima donasi ponsel dari Anda, kami harus memastikan bahwa ponsel yang Anda donasikan sesuai dengan spesifikasi yang dibutuhkan oleh para penerima donasi.</p>
                    </div>

                    <div class="d-flex justify-content-end mr-4">
                        <img class="mt-5" src="{{ asset('asset/cekponselVector.png') }}" alt="" style="width: 250px; height: 244px;">
                    </div>
                </div>

                <div class="col">
                </div>

                <div class="col-5">
                    <div class="card shadow p-4 d-flex align-items-center" style="background-color: #FFD493; border-radius: 20px; border:none;">
                        <p class="text-center">Scan QR Code di bawah menggunakan ponsel<br><span style="color: #0253B3;">yang akan didonasikan</span></p>
                        <img class="mb-3" src="{{ asset('asset/QR.png') }}" style="height: 12rem; width: 12rem;" alt="">
                        <p class="text-center mb-2">Atau masukkan link</p>
                        <div class="pl-3 pt-2 pb-2" style="background-color: whitesmoke; border-radius: 10px;">
                            <a href="https://bit.ly/35AOJPm" class="link-secondary">https://bit.ly/35AOJPm</a>
                            <i class="fa fa-copy pl-3 pr-3"></i>
                        </div>

                        <div class="text-center">
                            <p class="mt-5" style="font-size: 12px;">Layanan ini didukung oleh</p>
                            <img class="" src="{{ asset('asset/logoLaku6.png') }}" style="height: 1.5rem; width: auto;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="min-height: calc(100vh - 58px)" class="container d-flex">
        <div class="container d-flex align-items-center" style="margin-bottom: 3rem;">
            <div class="row">
                <div class="col-7" style="position: sticky">
                    <img src="{{ asset('asset/elipseVector.png') }}" alt="" style="top: -20px; left: 450px; position: absolute; width: 180px; height: 180px;">
                    <div class="mt-4 ml-5">
                        <h1 style="font-size: 1.8rem; font-weight: bolder;">Tahapan Pengecekan Ponsel</h1>
                        <p class="mb-4">Setelah Anda membuka link pada QR Code atau melalui link yang telah disediakan, Anda perlu melakukan tahapan-tahapan berikut:</p>
                        <div class="mt-3 d-flex align-items-center">
                            <img src="{{ asset('asset/no1.png') }}" alt="" class="mr-3" style="height: 3rem; width: 3rem;">
                            <span style="font-size: 1.5rem; font-weight: bolder;">Siapkan 2 buah ponsel</span>
                        </div>
                        <div class="mt-3 d-flex align-items-center">
                            <img src="{{ asset('asset/no2.png') }}" alt="" class="mr-3" style="height: 3rem; width: 3rem;">
                            <span style="font-size: 1.5rem; font-weight: bolder;">Pastikan Anda memiliki koneksi internet yang stabil</span>
                        </div>
                        <div class="mt-3 d-flex align-items-center">
                            <img src="{{ asset('asset/no3.png') }}" alt="" class="mr-3" style="height: 3rem; width: 3rem;">
                            <span style="font-size: 1.5rem; font-weight: bolder;">Ikuti panduan yang terdapat pada layar ponsel Anda</span>
                        </div>

                        <p class="mt-5 mb-3">Jika Anda sudah selesai, silakan klik tombol di bawah ini.</p>
                        <a href="{{ URL::previous() }}"><button type="button" class="btn-lg btn-primary mr-2 pl-4 pr-4" style="border-radius: 10rem;">Selesai</button></a>
                    </div>
                </div>

                <div class="col">
                </div>

                <div class="col-4">
                <img class="mt-5" src="{{ asset('asset/cekponselVector2.png') }}" alt="" style="width: 400px;">
                </div>
            </div>
        </div>
    </div>
@endsection
