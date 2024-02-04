@extends('layout.header')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Data Obat</h4>
                <br>
                <a href="{{ route('obat.index')}}" class="btn btn-outline-primary btn-sm">Kembali</a>
                <br><br>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="nama_obat">Nama Obat</label>
                      <input type="text" class="form-control" id="nama_obat" placeholder="Nama Obat">
                    </div>
                    <div class="form-group">
                      <label for="jenis_obat">Jenis Obat</label>
                      <input type="text" class="form-control" id="jenis_obat" placeholder="Nama Wali Kelas">
                    </div>
                    <div class="form-group">
                      <label for="manfaat">Manfaat</label>
                      <input type="text" class="form-control" id="manfaat" placeholder="manfaat">
                    </div>

                    <div class="form-group">
                      <label for="stok">Stok</label>
                      <input type="number" class="form-control" id="stok" placeholder="stok">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
