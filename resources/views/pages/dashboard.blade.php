@extends('layout.header')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome Admin</h3>
          <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
        </div>
        <div class="col-12 col-xl-4">
         <div class="justify-content-end d-flex">
          <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
            <button class=" shadow btn btn-sm btn-light bg-white " type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <h6>Today : 10 Jan 2021</h6>
            </button>
            
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card shadow">
          <div class="card-body">
            <h4 class="card-title">Pasien </h4>
          <canvas id="areaChart"></canvas>
          </div>
        </div>
      </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale shadow">
            <div class="card-body">
              <p class="mb-4">Data Obat</p>
              <p class="fs-30 mb-2">4006</p>
              <p>10.00% (30 days)</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue shadow">
            <div class="card-body">
              <p class="mb-4">Data Kelas</p>
              <p class="fs-30 mb-2">61344</p>
              <p>22.00% (30 days)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue shadow">
            <div class="card-body">
              <p class="mb-4">Data Siswa</p>
              <p class="fs-30 mb-2">34040</p>
              <p>2.00% (30 days)</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger shadow">
            <div class="card-body">
              <p class="mb-4">Data Pasien</p>
              <p class="fs-30 mb-2">47033</p>
              <p>0.22% (30 days)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection