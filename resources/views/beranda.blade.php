
@extends('layouts.main')

@section('container')
<div class="container-fluid">
    
    <p class="fs-3 mt-4 ">Hello Mitra Kurir </p>

    <div class="card mb-3" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://source.unsplash.com/170x137?electronics" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="background-color: #9BDCBD">
              <h5 class="card-title">Kamu sudah membawa</h5>
              <h2 class="card-text fw-bold">250</h2>
              <p class="card-text"><small class="text-body-secondary">Sampah elektronik</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-0 mt-5">
        <div class="col-sm-6 col-md-8">
            <h5 class="card-text fw-bold">Kategori Sampah</h5>
        </div>
        <div class="col-6 col-md-4 pl-5 text-end">
            <a href="/kategori" class="text-decoration-none text-end">Lainnya</a>
        </div>
      </div>

      {{-- card --}}
      <div class="row mt-3">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <a href="/jenis" class="text-decoration-none">
                <div class="card">
                    <img src="https://source.unsplash.com/300x70?fan" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Peralatan pertukaran suhu</h5>                 
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6">
            <a href="/jenis" class="text-decoration-none">
                <div class="card">
                    <img src="https://source.unsplash.com/300x70?monitor" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Monitor</h5>
                    </div>
                </div>
            </a>
        </div>
      </div>


</div>

@endsection