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
                  <form class="forms-sample" action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <select name="jenis_kelamin" id="" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="kelas_id">Kelas</label>
                      <select name="kelas_id" id="" class="form-control">
                        <option value="">Pilih Kelas</option>
                        @foreach ($data as $item)
                          <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="alamat">
                    </div>
                    <div class="form-group">
                      <label for="nomor_telpon">Nomor Telpon</label>
                      <input type="number" class="form-control" name="notelp_orangtua" placeholder="nomor_telpon">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
