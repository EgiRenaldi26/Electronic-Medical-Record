@extends('layout.header')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Data Siswa</h4>
                <br>
                <a href="{{ route('siswa.index')}}" class="btn btn-outline-primary btn-sm">Kembali</a>
                <br><br>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <input type="text" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin">
                    </div>
                    <div class="form-group">
                      <label for="id_kelas">Kelas</label>
                      <input type="text" class="form-control" id="id_kelas" placeholder="kelas">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="address" class="form-control" id="alamat" placeholder="alamat">
                    </div>
                    <div class="form-group">
                      <label for="nomor_telpon">Nomor Telpon</label>
                      <input type="number" class="form-control" id="nomor_telpon" placeholder="nomor_telpon">
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
