@extends('layouts.app')

@section('content')
<div class="bg-liquid" style="height: 84vh;">
    <div class="container d-flex align-items-center">
        <img src="/asset/img1.png" alt="" style="height: 30rem; width: 30rem;" class="mr-4">
        <div>
            <h1 class="font-weight-bolder">Gadget tidak terpakai?</h1>
            <h1 class="font-weight-bolder mb-5">Donasiin aja!</h1>
            <button onclick="location.href='#daftardonasi';" type="button" class="btn btn-primary mr-2" style="border-radius: 10rem;">Ayo Donasi!</button>
            <button onclick="location.href='#tugaskami';" type="button" class="btn btn-light" style="border-radius: 10rem;">Pelajari di sini</button>
        </div>
    </div>
</div>

<div class="d-flex align-items-center" style="height: 100vh; background-color: #0253B3;" id="daftardonasi">
    <div class="container">
        <h2 class="font-weight-bolder mb-5 text-center" style="color: white;">Donasi Bersama Kami</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-between">
            @foreach($campaigns as $campaign)
            <div class="col d-flex justify-content-center">
                <div class="card shadow-lg" style="border-radius: 1rem; border: 0; width: 16rem;">
                    <img src={{ $campaign->image }} class="bd-placeholder-img card-img-top" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 12rem; object-fit: cover;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $campaign->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg> {{ $arrdatediff[$loop->index] }} hari lagi</h6>
                        <p class="card-text mt-3 mb-3">{{ $campaign->desc }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/donasi/{{ $campaign->id }}/detail"><button type="button" class="btn btn-link p-0 m-0">Selengkapnya ></button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>

    <div class="d-flex align-items-center" style="height: 100vh; background-color: #ffffff;" id="tugaskami">
        <div class="container">
            <h2 class="font-weight-bolder text-center" style="color: #263238;">Tugas Kami</h2>
            <p class="lead text-muted text-center mb-5">Sudah menjadi tugas kami untuk melakukan proses pengecekan/kelayakan terhadap setiap barang yang didonasikan agar seluruh kegiatan donasi dapat berjalan dengan baik.</p>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-between">
                <div class="col d-flex justify-content-center">
                    <div class="card shadow" style="border-radius: 1rem; border: 0; width: 16rem; background-color: #EFF2F4;">
                        <img src="/asset/icon1.png" class="bd-placeholder-img card-img-top mt-4 mb-2" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 7rem; object-fit: contain;" alt="">
                        <div class="card-body p-4">
                            <h5 class="card-title text-center">Cek Kondisi</h5>
                            <hr class="mt-3 mb-3" style="height: 5px; width: 50px; border: none; background: #0253B3;">
                            <p class="card-text mt-3 mb-3 text-center">Website kami memfasilitasi pengecekan kondisi gadget yang akan didonasikan, baik dari segi fisik maupun fungsionalitas.</p>
                        </div>
                    </div>
                </div>

                <div class="col d-flex justify-content-center">
                    <div class="card shadow" style="border-radius: 1rem; border: 0; width: 16rem; background-color: #EFF2F4;">
                        <img src="/asset/icon2.png" class="bd-placeholder-img card-img-top mt-4 mb-2" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 7rem; object-fit: contain;" alt="">
                        <div class="card-body p-4">
                            <h5 class="card-title text-center">Memfasilitasi</h5>
                            <hr class="mt-3 mb-3" style="height: 5px; width: 50px; border: none; background: #0253B3;">
                            <p class="card-text mt-3 mb-3 text-center">Kami berusaha memberikan wadah untuk menghubungkan para penggalang donasi dengan donatur di berbagai daerah di Indonesia.</p>
                        </div>
                    </div>
                </div>

                <div class="col d-flex justify-content-center">
                    <div class="card shadow" style="border-radius: 1rem; border: 0; width: 16rem; background-color: #EFF2F4;">
                        <img src="/asset/icon3.png" class="bd-placeholder-img card-img-top mt-4 mb-2" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 7rem; object-fit: contain;" alt="">
                        <div class="card-body p-4">
                            <h5 class="card-title text-center">Menyalurkan</h5>
                            <hr class="mt-3 mb-3" style="height: 5px; width: 50px; border: none; background: #0253B3;">
                            <p class="card-text mt-3 mb-3 text-center">Setelah melakukan proses pengecekan kondisi, kami menjamin donasi betul-betul disalurkan kepada mereka yang membutuhkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
