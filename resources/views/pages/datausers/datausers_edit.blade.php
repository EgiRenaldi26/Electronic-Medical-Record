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
                  <form class="forms-sample" action="{{ route('users.update', $data->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" name="name" placeholder="Nama Kelas" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                      <label for="nama_walikelas">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Nama Wali Kelas" value="{{ $data->username }}">
                    </div>
                    <div class="form-group">
                      <label for="jurusan">Role</label>
                      <select name="role" id="" class="form-control">
                        <option value="admin" {{ $data->role == 'admin' ? 'selected' : ''}}>Admin</option> 
                        <option value="operator" {{ $data->role == 'operator' ? 'selected' : ''}}>Operator</option>
                      </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
