@extends('layout.header')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Data Kelas</h4>
                <br>
                <a href="{{ route('kelas.index')}}" class="btn btn-outline-primary btn-sm">Kembali</a>
                <br><br>
                  <form class="forms-sample" action="{{ route('kelas.update', $data->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="nama_kelas">Nama Kelas</label>
                      <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas" value="{{ $data->nama_kelas }}">
                    </div>
                    <div class="form-group">
                      <label for="nama_walikelas">Wali Kelas</label>
                      <input type="text" class="form-control" name="nama_walikelas" placeholder="Nama Wali Kelas" value="{{ $data->nama_walikelas }}">
                    </div>
                    <div class="form-group">
                      <label for="jurusan">Jurusan</label>
                      <input type="text" class="form-control" name="nama_jurusan" placeholder="Jurusan" value="{{ $data->nama_jurusan }}">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
