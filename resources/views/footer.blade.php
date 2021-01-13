<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<footer class="d-flex justify-content-evenly" style="background-color: #0253B3;">
    <div class="container d-flex flex-column mt-5">
        <div class="row">

            <!--Column1-->
            <div class="col-md-3 col-sm-6">
                <div>
                    <h4 style="color: white;">Lembiru.id</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-light mb-1 text-decoration-none" href="/visi-misi">Tentang Lembiru.id</a></li>
                        <li><a class="text-light mb-1 text-decoration-none" href="/visi-misi">Visi Misi</a></li>
                        <li><a class="text-light mb-1 text-decoration-none" href="#">Penghargaan</a></li>
                        <li><a class="text-light mb-1 text-decoration-none" href="#">Kantor Layanan</a></li>
                    </ul>
                </div>
            </div>

            <!--Column2-->
            <div class="col-md-3 col-sm-6">
                <div>
                    <h4 style="color: white;">Bantuan dan Panduan</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-light mb-1 text-decoration-none" href="#">Cara Berdonasi</a></li>
                        <li><a class="text-light mb-1 text-decoration-none" href="#">Bergabung dengan Kami</a></li>
                        <li><a class="text-light mb-1 text-decoration-none" href="#">Menjadi Sponsor</a></li>
                        <li><a class="text-light mb-1 text-decoration-none" href="#">Rekening Kami</a></li>
                    </ul>
                </div>
            </div>

            <!--Column3-->
            <div class="col-md-3 col-sm-6">
                <div>
                    <h4 style="color: white;">Pembayaran</h4>
                    <img src="/asset/logoVisa.png" style="height: 3rem;" class="mr-3" alt="">
                    <img src="/asset/logoMC.png" style="height: 3rem;" alt="">

                    <h4 class="mt-3" style="color: white;">Pengiriman</h4>
                    <img src="/asset/logoSicepat.png" style="height: 6rem;" alt="">
                </div>
            </div>

            <!--Column4-->
            <div class="col-md-3">
                <h4 style="color: white;">Ikuti Kami</h4>
                <ul class="list-unstyled">
                    <li><span class="fa fa-twitter mr-1" style="color: white;"></span><a class="text-light mb-1 text-decoration-none" href="https://twitter.com/lembiru.id">@lembiruid</a></li>
                    <li><span class="fa fa-instagram mr-2" style="color: white;"></span><a class="text-light mb-1 text-decoration-none" href="https://bit.ly/35AOJPm">@official_lembiru.id</a></li>
                    <li><span class="fa fa-facebook mr-3" style="color: white;"></span><a class="text-light mb-1 text-decoration-none" href="https://facebook.com/lembiru.id">lembiru.id</a></li>
                </ul>
            </div>
        </div>

        <hr class= "mt-3 mb-4" style="height: 1px; width: 70%; border: none; background: white;">
        <div class="row">
            <div class="col-md-12 copy">
                <p class="text-center" style="color: white;">&copy; Copyright 2021 - Lembiru.id</p>
            </div>
        </div>
    </div>
</footer>
</body>
