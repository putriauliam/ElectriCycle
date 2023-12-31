@extends('layouts.main')

@section('container')
    <div class="card text-center mt-3">
        <h1 class=" bg-white">
            Dropbox terdekat
        </h1>
        <div class="card-body mt-2">
            <img src="https://source.unsplash.com/735x335?maps" alt="" srcset="">
        </div>
        <div class="card-footer text-black d-flex justify-content-center align-items-center" style="background-color: #9BDCBD;">
    <div class="ms-auto">
        <h4><i class="fas fa-map-marker-alt me-2"></i>Jalan Cilame Indah no.40</h4>
        <h5>0.5 km</h5>
    </div>
    <div class="ms-auto">
        <a href="/maps" class="btn btn-light text-black fw-semibold">Jalan</a>
    </div>
</div>

    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection
