@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row mt-4">
        <div class=" ">
            <a href="/kategori" class="text-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                  </svg>
            </a>
            <span class="ml-2 fs-4 font-weight-bold t-1">Jenis Sampah</span>
        </div>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
    <div class="col">
      <div class="card">
        <img src="https://source.unsplash.com/700x150?lamp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lampu</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://source.unsplash.com/700x150?neon" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lampu neon</h5>
          
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://source.unsplash.com/700x150?led" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lampu LED</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://source.unsplash.com/700x150?bulb" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lampu bohlam</h5>
        </div>
      </div>
    </div>
  </div>

@endsection