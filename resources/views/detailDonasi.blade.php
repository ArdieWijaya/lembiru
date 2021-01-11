@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="detail-donasi container">
            <div class="circle circle-1">

            </div>
            <div class="circle circle-2">

            </div>
            <div class="row mb-3">
                <div class="col-md-9">
                    <div class="detail-donasi-wrapper">
                        <img class="detail-donasi-image img-fluid"
                             src="https://images.unsplash.com/photo-1585842378081-5cabd7b37679?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80"/>
                        <div class="detail-donasi-top-wrapper pl-3">
                            <div class="detail-donasi-title-container">
                                <h1 class="detail-donasi-title heading">{{ $campaign->name }}</h1>
                                <h6>digalang oleh <a><strong>{{ $campaign->creator }}</strong></a></h6>
                            </div>
                            <div class="detail-donasi-progress-container">
                                <h6 class="detail-donasi-progress-detail"><span
                                        class="text-accent"><strong>6 Ponsel</strong></span> terkumpul dari 30 ponsel</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="detail-donasi-button-wrapper">
                        <div class="text-right pt-1 mb-3">
                            <i class="bi bi-clock"></i>
                            42 hari lagi
                        </div>
                        <div class="btn btn-primary w-100">
                            Donasi Sekarang
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-9 mb-3">
                    <nav class="nav mb-3">
                        <a id="link-cerita" class="nav-link mr-3 active">
                            Cerita
                        </a>
                        <a id="link-spesifikasi" class="nav-link mr-3">
                            Spesifikasi Ponsel
                        </a>
                        <a id="link-penerima" class="nav-link mr-3">
                            Penerima Donasi
                        </a>
                    </nav>
                    <div id="detail-donasi-cerita" class="fragment body showing">
                        Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau
                        typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang
                        cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku
                        contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf
                        elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya
                        lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya
                        perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.
                    </div>
                    <div id="detail-donasi-spesifikasi" class="fragment body">
                        Mengapa kita menggunakannya?
                        Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman
                        saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki
                        penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti "Bagian isi disini, bagian isi
                        disini", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing
                        dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian
                        terhadap kalimat "Lorem Ipsum" akan berujung pada banyak situs web yang masih dalam tahap
                        pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja,
                        kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)
                    </div>
                    <div id="detail-donasi-penerima" class="fragment body">
                        Dari mana asalnya?
                        Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari
                        sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah
                        mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari
                        Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling
                        tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari
                        maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum
                        berasal dari bagian 1.10.32 dan 1.10.33 dari naskah "de Finibus Bonorum et Malorum" (Sisi Ekstrim
                        dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini
                        adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem
                        Ipsum, "Lorem ipsum dolor sit amet..", berasal dari sebuah baris di bagian 1.10.32.

                        Bagian standar dari teks Lorem Ipsum yang digunakan sejak tahun 1500an kini di reproduksi kembali di
                        bawah ini untuk mereka yang tertarik. Bagian 1.10.32 dan 1.10.33 dari "de Finibus Bonorum et
                        Malorum" karya Cicero juga di reproduksi persis seperti bentuk aslinya, diikuti oleh versi bahasa
                        Inggris yang berasal dari terjemahan tahun 1914 oleh H. Rackham.
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card w-100">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item sub-heading">Donasi (6)</li>
                            <li class="list-group-item">
                                <h5>Indira Fany</h5>
                                <h6 class="text-secondary">Mendonasikan <strong>1 ponsel</strong></h6>
                                <h6 class="text-secondary">27-11-2919</h6>
                            </li>
                            <li class="list-group-item">
                                <h5>Abang Ardie</h5>
                                <h6 class="text-secondary">Mendonasikan <strong>100 iphone boba</strong></h6>
                                <h6 class="text-secondary">27-11-2919</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
