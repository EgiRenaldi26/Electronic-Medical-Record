<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $title = "Data Siswa";
        $data = Siswa::all();
        return view('pages.datasiswa.datasiswa',compact('title','data'));
    }

   
    public function create()
    {
        $title = "Data Siswa Tambah";
        $data = Kelas::all();
        return view('pages.datasiswa.datasiswa_create',compact('title','data'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'kelas_id' => 'required|exists:Kelas,id',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required',
            'notelp_orangtua' => 'required',
        ]);

        Siswa::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'kelas_id' => $request->input('kelas_id'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'notelp_orangtua' => $request->input('notelp_orangtua'),
        ]);

        return redirect()->route('siswa.index')->with('Success','Data Siswa Berhasil di Tambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = "Data Siswa Edit";
        $data = Siswa::find($id);
        $kelas = Kelas::all();
        return view('pages.datasiswa.datasiswa_edit',compact('title','data','kelas'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'kelas_id' => 'required|exists:Kelas,id',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required',
            'notelp_orangtua' => 'required',
        ]);

        $siswa = Siswa::find($id);
        $siswa ->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'kelas_id' => $request->input('kelas_id'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'notelp_orangtua' => $request->input('notelp_orangtua'),
        ]);

        $siswa->save();

        return redirect()->route('siswa.index')->with('Success','Data Siswa Berhasil di Update');
    }

    
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('Success','Data Siswa Berhasil di Hapus');
    }
}
