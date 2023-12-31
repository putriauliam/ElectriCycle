@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row mt-4">
        <div class=" ">
            <a href="/" class="text-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                  </svg>
            </a>
            <span class="ml-2 fs-4 font-weight-bold t-1">Kategori Sampah</span>
        </div>
    </div>
</div>

<div class="row mt-4">
    <a href="/jenis" class="text-decoration-none">
        <div class="card mb-3">
            <img src="https://source.unsplash.com/700x150?lamp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lampu</h5>
            </div>
          </div>
    </a>
    <a href="/jenis" class="text-decoration-none">
        <div class="card mb-3">
            <img src="https://source.unsplash.com/700x150?fan" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Peralatan pertukaran suhu</h5>
            </div>
          </div>
    </a>
    <a href="/jenis" class="text-decoration-none">
        <div class="card mb-3">
            <img src="https://source.unsplash.com/700x150?laptop" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Layar dan Monitor</h5>
            </div>
          </div>
    </a>
    
</div>

@endsection