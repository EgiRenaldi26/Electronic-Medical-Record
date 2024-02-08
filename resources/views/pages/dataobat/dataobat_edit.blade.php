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
                  <form class="forms-sample" action="{{ route('obat.update', $data->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="nama_obat">Nama Obat</label>
                      <input type="text" class="form-control" name="nama_obat" placeholder="Nama Obat" value="{{ $data->nama_obat }}">
                    </div>
                    <div class="form-group">
                      <label for="jenis_obat">Jenis Obat</label>
                      <select name="jenis_obat" id="" class="form-control">
                        <option value="Cair" {{ $data->jenis_obat == 'Cair' ? 'selected' : ''}}>Cair</option>                        
                        <option value="Tablet" {{ $data->jenis_obat == 'Tablet' ? 'selected' : ''}}>Tablet</option>                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="manfaat">Manfaat</label>
                      <input type="text" class="form-control" name="fungsi_obat" placeholder="manfaat" value="{{ $data->fungsi_obat }}">
                    </div>

                    <div class="form-group">
                      <label for="stok">Stok</label>
                      <input type="number" class="form-control" name="qty" placeholder="stok" value="{{ $data->qty }}">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
