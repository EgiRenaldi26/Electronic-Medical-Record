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
                  <form class="forms-sample" action="{{ route('siswa.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $data->nama_lengkap }}">
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <select name="jenis_kelamin" id="" class="form-control">
                        <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                        <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="id_kelas">Kelas</label>
                      <select name="kelas_id" id="" class="form-control">
                        <option value="">Pilih Kelas</option>
                        @foreach ($kelas as $item)
                          <option value="{{ $item->id }}" {{ $data->kelas_id == $item->id ? 'selected' : ''}}>{{ $item->nama_kelas }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="address" class="form-control" name="alamat" placeholder="alamat" value="{{ $data->alamat }}">
                    </div>
                    <div class="form-group">
                      <label for="nomor_telpon">Nomor Telpon</label>
                      <input type="number" class="form-control" name="notelp_orangtua" placeholder="nomor_telpon" value="{{ $data->notelp_orangtua }}">
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
