@extends('layout.header')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Data Users</h4>
                <br>
                <a href="{{ route('kelas.index')}}" class="btn btn-outline-primary btn-sm">Kembali</a>
                <br><br>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Kelas">
                    </div>
                    <div class="form-group">
                      <label for="nama_walikelas">Nis</label>
                      <input type="text" class="form-control" id="nama_walikelas" placeholder="Nama Wali Kelas">
                    </div>
                    <div class="form-group">
                      <label for="jurusan">Password</label>
                      <input type="text" class="form-control" id="jurusan" placeholder="Jurusan">
                    </div>
                   
                    <div class="form-group">
                      <label for="jurusan">Role</label>
                      <input type="text" class="form-control" id="jurusan" placeholder="Jurusan">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection