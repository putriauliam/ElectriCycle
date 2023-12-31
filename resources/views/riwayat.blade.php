@extends('layouts.main')

@section('container')
    <p class="fw-bold fs-2 py-2">6 Riwayat Penjemputan</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 " style="max-width: 100%; background-color: #9BDCBD; margin-bottom: 20px;"> <!-- Menambahkan margin-bottom untuk spasi -->
                    <a href="" class="text-decoration-none">
                        <div class="card-body d-flex">
                            <img src="/img/cowok.jpg" alt="Gambar" class="rounded-circle mr-3" style="width: 100px; height: 100px;"> <!-- Mengatur ukuran gambar -->
                            <div class="d-flex flex-column justify-content-between"> <!-- Menyamakan jarak text -->
                                <div class="px-3 text-dark"> <!-- Mengurangi padding horizontal -->
                                    <h5 class="card-title fw-semibold mt-2 mb-0">Pratama Fauzan Adi </h5>
                                    <p class="card-text mt-2 mb-0">2 KM</p>
                                    <p class="card-text mt-2 mb-0">AC, TV, HP</p>
                                </div>
                                <div></div> <!-- Elemen kosong untuk space di bagian bawah -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4" style="max-width: 100%; background-color: #9BDCBD;"> <!-- Mengatur lebar maksimum card dan margin -->
                    <a href="" class="text-decoration-none">
                        <div class="card-body d-flex">
                            <img src="/img/cewek.jpg" alt="Gambar" class="rounded-circle mr-3" style="width: 100px; height: 100px;"> <!-- Mengatur ukuran gambar -->
                            <div class="px-3 text-dark"> <!-- Mengurangi padding horizontal -->
                                <h5 class="card-title fw-semibold mt-2 mb-0">Putri Nanda Indah</h5>
                                    <p class="card-text mt-2 mb-0">3 KM</p>
                                    <p class="card-text mt-2 mb-0">Lampu bohlam, Lampu Pijar, Lampu Neon</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4" style="max-width: 100%; background-color: #9BDCBD;"> <!-- Mengatur lebar maksimum card dan margin -->
                    <a href="" class="text-decoration-none">
                        <div class="card-body d-flex">
                            <img src="/img/cowok.jpg" alt="Gambar" class="rounded-circle mr-3" style="width: 100px; height: 100px;"> <!-- Mengatur ukuran gambar -->
                            <div class="px-3 text-dark"> <!-- Mengurangi padding horizontal -->
                               <h5 class="card-title fw-semibold mt-2 mb-0">Bayu Gilang Nugraha</h5>
                                    <p class="card-text mt-2 mb-0">3 KM</p>
                                    <p class="card-text mt-2 mb-0">Mesin Cuci</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4" style="max-width: 100%; background-color: #9BDCBD;"> <!-- Mengatur lebar maksimum card dan margin -->
                    <a href="" class="text-decoration-none">
                        <div class="card-body d-flex">
                            <img src="/img/cewek.jpg" alt="Gambar" class="rounded-circle mr-3" style="width: 100px; height: 100px;"> <!-- Mengatur ukuran gambar -->
                            <div class="px-3 text-dark"> <!-- Mengurangi padding horizontal -->
                               <h5 class="card-title fw-semibold mt-2 mb-0"> Dwi Rina Lestari</h5>
                                    <p class="card-text mt-2 mb-0">2 KM</p>
                                    <p class="card-text mt-2 mb-0">Printer, Mesin Fotocopy</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4" style="max-width: 100%; background-color: #9BDCBD;"> <!-- Mengatur lebar maksimum card dan margin -->
                    <a href="" class="text-decoration-none">
                        <div class="card-body d-flex">
                            <img src="/img/cewek.jpg" alt="Gambar" class="rounded-circle mr-3" style="width: 100px; height: 100px;"> <!-- Mengatur ukuran gambar -->
                            <div class="px-3 text-dark"> <!-- Mengurangi padding horizontal -->
                               <h5 class="card-title fw-semibold mt-2 mb-0">Ayu Sari Cindy</h5>
                                    <p class="card-text mt-2 mb-0">2 KM</p>
                                    <p class="card-text mt-2 mb-0">Laptop, Handphone</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4" style="max-width: 100%; background-color: #9BDCBD;"> <!-- Mengatur lebar maksimum card dan margin -->
                    <a href="" class="text-decoration-none">
                        <div class="card-body d-flex">
                            <img src="/img/cowok.jpg" alt="Gambar" class="rounded-circle mr-3" style="width: 100px; height: 100px;"> <!-- Mengatur ukuran gambar -->
                            <div class="px-3 text-dark"> <!-- Mengurangi padding horizontal -->
                               <h5 class="card-title fw-semibold mt-2 mb-0">Ananta Putra Rizky </h5>
                                    <p class="card-text mt-2 mb-0">4 KM</p>
                                    <p class="card-text mt-2 mb-0">Tablet, PC</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection
