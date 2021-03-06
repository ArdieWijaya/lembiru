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
                    <img class="detail-donasi-image img-fluid" src="{{ $campaign->image }}"/>
                    <div class="detail-donasi-top-wrapper pl-3">
                        <div class="detail-donasi-title-container">
                            <h1 class="detail-donasi-title heading">{{ $campaign->name }}</h1>
                            <h6>digalang oleh <a><strong>{{ $campaign->creator }}</strong></a></h6>
                        </div>
                        <div class="detail-donasi-progress-container">
                            <h6 class="detail-donasi-progress-detail"><span class="text-accent"><strong>{{ $total }} Ponsel</strong></span> terkumpul dari {{ $campaign->qty }} ponsel</h6>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $total/$campaign->qty*100 }}%" aria-valuenow="{{ $total }}" aria-valuemin="0" aria-valuemax="{{ $campaign->qty }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="detail-donasi-button-wrapper">
                    <div class="text-right pt-1 mb-3">
                        <i class="bi bi-clock"></i>
                        {{ $datediff }} hari lagi
                    </div>
                    @if($campaign->qty > $total)
                    <a href="/donasi/{{ $campaign->id }}/detail/donasi">
                        <div class="btn btn-primary w-100">
                            Donasi Sekarang
                        </div>
                    </a>
                    @endif
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
                    {{ $campaign->desc }}
                </div>
                <div id="detail-donasi-spesifikasi" class="fragment body">
                    {{ $campaign->spesifikasi }}
                </div>
                <div id="detail-donasi-penerima" class="fragment body">
                    {{ $campaign->penerima }}
                </div>
            </div>
            <div class="col-md-3">
                <div class="card w-100">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item sub-heading">Donasi ({{ $total }})</li>
                        @foreach($donates as $donate)
                        <li class="list-group-item">
                            <h5>{{ $donate->user->name }}</h5>
                            <h6 class="text-secondary">Mendonasikan <strong>1 ponsel</strong></h6>
                            <h6 class="text-secondary">{{ $donate->created_at }}</h6>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection