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
@endsection