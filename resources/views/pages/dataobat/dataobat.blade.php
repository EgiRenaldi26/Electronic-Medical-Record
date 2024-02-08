@extends('layout.header')
@section('content')
<style>


button.t {
  position: relative;
  outline: none;
  text-decoration: none;
  border-radius: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  text-transform: uppercase;
  height: 30px;
  width: 130px;
  opacity: 1;
  background-color: #ffffff;
  border: 1px solid rgba(22, 76, 167, 0.6);
}
button.t span {
  color: #164ca7;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.7px;
}
button.t:hover {
  animation: rotate 0.7s ease-in-out both;
}
button.t:hover span {
  animation: storm 0.7s ease-in-out both;
  animation-delay: 0.06s;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }
  25% {
    transform: rotate(3deg) translate3d(0, 0, 0);
  }
  50% {
    transform: rotate(-3deg) translate3d(0, 0, 0);
  }
  75% {
    transform: rotate(1deg) translate3d(0, 0, 0);
  }
  100% {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }
}
@keyframes storm {
  0% {
    transform: translate3d(0, 0, 0) translateZ(0);
  }
  25% {
    transform: translate3d(4px, 0, 0) translateZ(0);
  }
  50% {
    transform: translate3d(-3px, 0, 0) translateZ(0);
  }
  75% {
    transform: translate3d(2px, 0, 0) translateZ(0);
  }
  100% {
    transform: translate3d(0, 0, 0) translateZ(0);
  }
}



.typing-demo {
  width: 50ch;  
  animation: typing 1s steps(22), blink .3s step-end infinite alternate;
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
  font-family: 'poppins';
  font-size: 15px;
}

@keyframes typing {
  from {
    width: 0
  }
}
    
@keyframes blink {
  50% {
    border-color: transparent
  }
}
</style>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome Admin</h3>
                <div class="wrapper">
                    <div class="typing-demo">
                     Selamat Berkerja , Anda Berada pada halaman <strong>Data Obat</strong>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <a style="text-decoration:none;" href="{{ route('obat.create')}}">
                  <button class="t">
                    <span><i class="fas fa-plus"></i> TAMBAH</span>
                  </button>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Data Obat</h4>
                <div class="table-responsive">
                    <table class="table table-bordered text-no-wrap border">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th>Jenis Obat</th>
                                <th>Manfaat</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_obat }}</td>
                                <td>{{ $item->jenis_obat }}</td>
                                <td>{{ $item->fungsi_obat }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>
                                    <a href="{{ route('obat.edit', $item->id)}}" class="btn btn-outline-warning btn-sm">Edit</a> -
                                    <form action="{{route('obat.destroy', $item->id)}}" method="POST">
                                      @csrf
                                      @method('delete')
                                      <button type="submit" class="btn btn-inverse-danger btn-sm">hapus</button>
                                    </form>
                                  </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
