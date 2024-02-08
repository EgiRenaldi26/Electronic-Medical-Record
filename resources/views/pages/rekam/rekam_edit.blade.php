@extends('layout.header')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Data Rekam</h4>
                <br>
                <a href="{{ route('kelas.index')}}" class="btn btn-outline-primary btn-sm">Kembali</a>
                <br><br>
                  <form class="forms-sample" action="{{ route('rekam.update', $data->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <select name="siswa_id" id="siswa_id" class="form-control search">
                        @foreach ($siswa as $item)
                        <option value="{{ $item->id }}" {{ $data->siswa_id == $item->id ? 'selected' : ''}}>{{ $item->nama_lengkap }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="tanggal_pemeriksaan">Tanggal Pemeriksaan</label>
                      <input type="date" class="form-control" name="tanggal_masuk" placeholder="" value="{{$data->tanggal_masuk}}">
                    </div>
                    <div class="form-group">
                      <label for="keluhan">Keluhan</label>
                      <input type="text" class="form-control" name="keluhan" placeholder="keluhan" value="{{$data->keluhan}}">
                    </div>
                   
                    <label for="produk" class="form-label">Obat</label>
                    <div class="mb-3 d-flex">
                      <select name="obat[]" required id="obats" class="form-control">
                        <option selected>Open this select menu</option>
                        @foreach ($obat as $p)
                            <option value="{{ $p->id }}" >{{ $p->nama_obat }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" id="selectedObatId" name="selectedObatId" value="">
                    <button type="button" class="btn btn-primary mx-2" onclick="addRow()"><i><i class="fas fa-plus"></i></button>
                  </div>
                    <div class="table-responsive my-3">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody id="tableBody">
                              @foreach ($data->obat as $oldobat)
                                @php
                                  $oname= App\Models\Obat::find($oldobat['obatId']);
                                @endphp
                                <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$oname->nama_obat}}</td>
                                  <td>
                                    <input type="number" name="qty[]" id="" value="{{$oldobat['qty']}}" min="1" class="form-control">
                                    <input type="hidden" name="obatId[]" value="{{$oldobat['obatId']}}">
                                  </td>
                                  <td><button type="button" class="btn btn-danger" onclick="removeRow(this)"><i
                                    class="fas fa-trash"></i></button></td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                   
                    <div class="form-group">
                      <label for="keterangan_tambahan">Keterangan Tamhaban</label>
                      <input type="text" class="form-control" name="ket" placeholder="keterangan_tambahan" value="{{$data->ket}}">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2 shadow">Submit</button>
                    <button class="btn btn-light shadow">Cancel</button>
                  </form>
            </div>
        </div>
    </div>
</div>

<script>
  function cariSiswa() {
      var input, filter, select, option, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      select = document.getElementById("siswa_id");
      option = select.getElementsByTagName("option");
      for (i = 0; i < option.length; i++) {
          txtValue = option[i].textContent || option[i].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              option[i].style.display = "";
          } else {
              option[i].style.display = "none";
          }
      }
  }

  document.getElementById("searchInput").addEventListener("input", cariSiswa);

  function addRow() {
  var selectedObat = $('#obats option:selected');
  var nama_obat = selectedObat.text();
  var obatId = selectedObat.val();
  var qty = $('#qty').val();
  var oldobat = $('#tabetbody tr').find(`input[value="${obatId}"]`).length > 0;

  if (!oldobat){
    var newRow = `
    <tr>
      <td>${$('#tableBody tr').length + 1}</td>
      <td>${nama_obat}</td>
      <td>
        <input type="number" class="form-control qtyInput" name="qty[]" value="${qty}" min="1">
        <input type="hidden" name="obatId[]" value="${obatId}">
      </td>
      <td><button type="button" class="btn btn-danger" onclick="removeRow(this)"><i class="fas fa-trash"></i></button></td>
    </tr>
  `;

  $('#tableBody').append(newRow);
  }else {
    alert('Product sudah ditambahkan sebelumnya. Untuk mengedit, gunakan fitur edit.');
  }

  $('#qty').val('');
  $('#selectedObatId').val('');

}

function removeRow(row) {
  $(row).parent().parent().remove();
}
</script>
@endsection
