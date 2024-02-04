@extends('layout.header')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Data Rekam</h4>
                <br>
                <a href="{{ route('kelas.index')}}" class="btn btn-outline-primary btn-sm">Kembali</a>
                <br><br>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Kelas">
                    </div>
                    <div class="form-group">
                      <label for="tanggal_pemeriksaan">Tanggal Pemeriksaan</label>
                      <input type="date" class="form-control" id="tanggal_pemeriksaan" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="keluhan">Keluhan</label>
                      <input type="text" class="form-control" id="keluhan" placeholder="keluhan">
                    </div>
                   
                    <div class="form-group">
                      <label for="nama_obat">Nama Obat</label>
                      <input type="text" class="form-control" id="nama_obat" placeholder="nama_obat">
                    </div>
                   
                    <div class="form-group">
                      <label for="keterangan_tambahan">Keterangan Tamhaban</label>
                      <input type="text" class="form-control" id="keterangan_tambahan" placeholder="keterangan_tambahan">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
