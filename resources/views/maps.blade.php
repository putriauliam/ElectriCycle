@extends('layouts.main')

@section('container')
    <div class="card text-center mt-3">
        <div style="position: relative;">
            <img src="https://source.unsplash.com/1110x445?maps" alt="" srcset="">
            <div class="card-body mt-2" style="position: absolute; top: 10%; left: 50%; transform: translate(-50%, -50%);">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-solid fa-circle fa-xs me-2"></i>Lokasi saya</li>
                    <li class="list-group-item"><i class="fas fa-map-marker-alt me-2"></i>Jl Bukit Permata no.27</li>
                </ul>
            </div>
        </div>

        <div class="card-footer text-black d-flex justify-content-center align-items-center" style="background-color: #9BDCBD;" >
            <div class="ms-auto">
                <h2>30 Min</h2>
                <h5>13.6 km <i class="fas fa-solid fa-circle fa-0x"></i> Rute tercepat</h5>
            </div>
            <div class="ms-auto">
                <i class="fas fa-thin fa-car-side fa-4x"></i>
            </div>
        </div>

    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection
