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
                  <form class="forms-sample" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Nama Kelas">
                    </div>
                    <div class="form-group">
                      <label for="nama_walikelas">Username</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username" readonly>
                    </div>
                    <div class="form-group">
                      <label for="jurusan">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                      <label for="jurusan">Confirm Password</label>
                      <input type="password" class="form-control" name="confirm_password" placeholder="Jurusan">
                    </div>
                   
                    <div class="form-group">
                      <label for="jurusan">Role</label>
                      <select name="role" id="" class="form-control">
                        <option value="">Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="operator">Oprator</option>
                      </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>

<script>
  function generateUsername() {
      var namaLengkap = document.getElementById("name").value.toLowerCase(); // Mendapatkan nilai nama lengkap dan mengonversi ke huruf kecil
      var username = namaLengkap.replace(/\s+/g, ''); // Menghapus spasi dari nama lengkap
      var randomNumbers = Math.floor(Math.random() * 100); // Mendapatkan dua angka acak
      username += randomNumbers; // Menambahkan angka acak ke nama pengguna
      document.getElementById("username").value = username; // Menetapkan nilai username ke input username
  }

  document.getElementById("name").addEventListener("input", generateUsername);
</script>

@endsection
