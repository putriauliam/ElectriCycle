@extends('layouts.main')
@section('container')
    <p class="fw-bold fs-2 py-2 text-center">Detail Permintaan</p>
    <div class="container text-center">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <img src="/img/cowok.jpg" alt="Gambar" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                <h5 class="card-title fw-semibold mt-3 mb-2">Fauzan Adi Pratama</h5>
                <p class="card-text mt-2 mb-2">2 KM</p>
                <!-- Digunakan untuk mengatur ikon dan teks agar sejajar -->
                <div class="d-flex align-items-center justify-content-center mt-3 mb-3">
                    <i class="fas fa-map-marker-alt me-2"></i>
                    <p class="mb-0 fw-bold">Jl. Bukit Indah No.80</p>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-3 mb-3">
                    <i class="fas fa-list-ul me-2"></i>
                    <p class="mb-0 fw-semibold">Daftar Sampah</p>
                </div>
                
                <div class="d-flex align-items-start justify-content-center mt-3 mb-3">
                    <div>
                        <ul style="list-style-type: disc; margin-top: 5px; text-align: left;">
                            <li>AC ‎  ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎  2x</li>
                            <li>TV ‎  ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎  1x</li>
                            <li>HP ‎  ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎  1x</li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-4">
            <a href="/dropbox" class="btn" style="background-color: #9BDCBD;">Terima</a>
        </div>        
        
    </div>
    <!-- Pastikan tautan Font Awesome dimasukkan sebelum penggunaan ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection
