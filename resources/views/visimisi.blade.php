@extends('layouts.app')

@section('content')
    <div class="container mt-4 d-flex">
        <div class="col-7" style="position: sticky">
            <img src="{{ asset('asset/elipseVector.png') }}" alt="" style="position: absolute; width: 200px; height: 200px;">
            <div class="mt-4 ml-5">
                <h1 style="font-size: 2rem;">Menghubungkan #OrangBaik.</h1>
                <h1 style="line-height: 30px; font-size: 2rem;">Bergotong-Royong Salurkan</h1>
                <h1 class="mb-5" style="line-height: 30px; font-size: 2rem;">Kebaikan</h1>
            </div>

            <div class="d-flex justify-content-end mr-4">
                <img class="mt-5" src="{{ asset('asset/visimisiVector.png') }}" alt="" style="width: 300px; height: 293px;">
            </div>
        </div>

        <div class="col-5">
            <p class="mt-4" style="color: #0253b3">Kami percaya, kemajuan teknologi sepatutnya dimanfaatkan untuk
                menghubungkan semangat kebaikan dan gotong-royong. Di Lembiru.id,
                masyarakat bisa menggalang donasi ponsel bekas untuk mereka yang
                membutuhkan. Selain menyalurkan kebaikan, donasi ponsel bekas ini
                juga bisa membantu Indonesia mengurangi sampah elektronik loh!</p>
            <div>
                <h3 class="mb-2 font-weight-bold">Visi</h3>
                <p>Lembiru.id memiliki visi untuk kegiatan donasi yang sejalan 
                    dengan Tujuan Sosial Berkelanjutan dan berkontribusi 
                    pada kegiatan sosial di Indonesia, dengan berfokus 
                    pada donasi barang elektronik bekas guna mendukung proses
                    digitalisasi Indonesia, serta mengurangi sampah elektronik di
                    Indonesia.</p>
            </div>

            <div>
                <h3 class="mb-2 font-weight-bold">Misi</h3>
                <p>• Membantu masyarakat untuk menyalurkan ponsel bekas</p>
                <p style="line-height: 20px; margin-top: -0.8rem">• Mendukung kegiatan sehari-hari masyarakat untuk beralih ke online</p>
                <p style="margin-top: -0.8rem;">• Membantu mengurangi sampah elektronik di Indonesia</p>
            </div>

        </div>
    </div>
@endsection