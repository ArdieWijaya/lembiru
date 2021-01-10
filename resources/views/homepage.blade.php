@extends('layouts.app')

@section('content')
<div class="bg-liquid"  style="height: 84vh;">
    <div class="container d-flex align-items-center">
        <img src="/asset/img1.png" alt="" style="height: 30rem; width: 30rem;" class="mr-4">
        <div>
            <h1 class="font-weight-bolder">Gadget tidak terpakai?</h1>
            <h1 class="font-weight-bolder mb-5">Donasiin aja!</h1>
            <button type="button" class="btn btn-primary mr-2" style="border-radius: 10rem;">Ayo Donasi!</button>
            <button type="button" class="btn btn-light" style="border-radius: 10rem;">Pelajari di sini</button>
        </div>
    </div>
</div>

<div class="d-flex align-items-center" style="height: 100vh; background-color: #0253B3;">
    <div class="container">
        <h2 class="font-weight-bolder mb-5 text-center" style="color: white;">Donasi Bersama Kami</h2>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-between">
            <div class="col d-flex justify-content-center">
                <div class="card shadow-lg" style="border-radius: 1rem; border: 0; width: 16rem; height: 25rem;">
                    <img src="/asset/photo1.png" class="bd-placeholder-img card-img-top" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 12rem; object-fit: cover;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Bantu Siswa SDN01</h5>
                        <h6 class="card-subtitle mb-2 text-muted">24 hari lagi</h6>
                        <p class="card-text mt-3 mb-3">Donasikan ponsel bekasmu untuk membantu para siswa SDN01 Bekasi belajar online!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-link p-0 m-0">Selengkapnya ></button>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card shadow-lg" style="border-radius: 1rem; border: 0; width: 16rem; height: 25rem;">
                    <img src="/asset/photo1.png" class="bd-placeholder-img card-img-top" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 12rem; object-fit: cover;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Bantu Siswa SDN01</h5>
                        <h6 class="card-subtitle mb-2 text-muted">24 hari lagi</h6>
                        <p class="card-text mt-3 mb-3">Donasikan ponsel bekasmu untuk membantu para siswa SDN01 Bekasi belajar online!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-link p-0 m-0">Selengkapnya ></button>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card shadow-lg" style="border-radius: 1rem; border: 0; width: 16rem; height: 25rem;">
                    <img src="/asset/photo1.png" class="bd-placeholder-img card-img-top" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 12rem; object-fit: cover;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Bantu Siswa SDN01</h5>
                        <h6 class="card-subtitle mb-2 text-muted">24 hari lagi</h6>
                        <p class="card-text mt-3 mb-3">Donasikan ponsel bekasmu untuk membantu para siswa SDN01 Bekasi belajar online!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-link p-0 m-0">Selengkapnya ></button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-center mt-5">
          <a href="#" class="btn btn-light btn-lg">Lihat Semua Donasi</a>
        </p>

    </div>
</div>

<div class="d-flex align-items-center" style="height: 100vh; background-color: #ffffff;">
    <div class="container">
        <h2 class="font-weight-bolder text-center" style="color: #263238;">Tugas Kami</h2>
        <p class="lead text-muted text-center mb-5">Sudah menjadi tugas kami untuk melakukan proses pengecekan/kelayakan terhadap setiap barang yang  didonasikan agar seluruh kegiatan donasi dapat berjalan dengan baik.</p>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-between">
            <div class="col d-flex justify-content-center">
                <div class="card shadow" style="border-radius: 1rem; border: 0; width: 16rem; height: 24rem; background-color: #EFF2F4;">
                    <img src="/asset/icon1.png" class="bd-placeholder-img card-img-top mt-4 mb-2" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 7rem; object-fit: contain;" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center">Cek Kondisi</h5>
                        <hr class= "mt-3 mb-3" style="height: 5px; width: 50px; border: none; background: #0253B3;">
                        <p class="card-text mt-3 mb-3">Website kami memfasilitasi pengecekan kondisi gadget yang akan didonasikan, baik dari segi fisik maupun fungsionalitas.</p>
                    </div>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card shadow" style="border-radius: 1rem; border: 0; width: 16rem; height: 24rem; background-color: #EFF2F4;">
                <img src="/asset/icon2.png" class="bd-placeholder-img card-img-top mt-4 mb-2" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 7rem; object-fit: contain;" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center">Memfasilitasi</h5>
                        <hr class= "mt-3 mb-3" style="height: 5px; width: 50px; border: none; background: #0253B3;">
                        <p class="card-text mt-3 mb-3">Kami berusaha memberikan wadah untuk menghubungkan para penggalang donasi dengan donatur di berbagai daerah di Indonesia.</p>
                    </div>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card shadow" style="border-radius: 1rem; border: 0; width: 16rem; height: 24rem; background-color: #EFF2F4;">
                <img src="/asset/icon3.png" class="bd-placeholder-img card-img-top mt-4 mb-2" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; height: 7rem; object-fit: contain;" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center">Menyalurkan</h5>
                        <hr class= "mt-3 mb-3" style="height: 5px; width: 50px; border: none; background: #0253B3;">
                        <p class="card-text mt-3 mb-3">Setelah melakukan proses pengecekan kondisi, kami menjamin donasi betul-betul disalurkan kepada mereka yang membutuhkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection