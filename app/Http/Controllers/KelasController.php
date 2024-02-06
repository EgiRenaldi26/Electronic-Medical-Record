<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Kelas";
        $data = Kelas::all();
        return view('pages.datakelas.datakelas',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Data Kelas";
        return view('pages.datakelas.datakelas_create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'nama_walikelas' => 'required',
            'nama_jurusan' => 'required',
        ]);

        Kelas::create([
           'nama_kelas' => $request->nama_kelas,
           'nama_walikelas' => $request->nama_walikelas,
           'nama_jurusan' => $request->nama_jurusan
        ]);

        return redirect()->route('kelas.index')->with('Success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Data Kelas";
        $data = Kelas::find($id);
        return view('pages.datakelas.datakelas_edit',compact('title','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'nama_walikelas' => 'required',
            'nama_jurusan' => 'required',
        ]);

        $data = Kelas::find($id);
        $data->update($request->all());

        return redirect()->route('kelas.index')->with('Success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('kelas.index')->with('Success', 'Data Berhasil Dihapus');
    }
}
