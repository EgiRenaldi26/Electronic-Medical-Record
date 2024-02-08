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
                  <form class="forms-sample" action="{{ route('obat.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="nama_obat">Nama Obat</label>
                      <input type="text" class="form-control" name="nama_obat" placeholder="Nama Obat">
                    </div>
                    <div class="form-group">
                      <label for="jenis_obat">Jenis Obat</label>
                      <select name="jenis_obat" id="" class="form-control">
                        <option value="">Pilih Jenis Obat</option>
                        <option value="Cair">Cair</option>
                        <option value="Tablet">Tablet</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="manfaat">Manfaat</label>
                      <input type="text" class="form-control" name="fungsi_obat" placeholder="manfaat">
                    </div>

                    <div class="form-group">
                      <label for="stok">Stok</label>
                      <input type="number" class="form-control" name="qty" placeholder="stok">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
