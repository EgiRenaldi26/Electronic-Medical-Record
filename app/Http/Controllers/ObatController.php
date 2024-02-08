<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Obat";
        $data = Obat::all();
        return view('pages.dataobat.dataobat',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Data Obat Tambah";
        return view('pages.dataobat.dataobat_create',compact('title'));
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
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'fungsi_obat' => 'required',
            'qty' => 'required',
        ]);

        Obat::create([
            'nama_obat' => $request->input('nama_obat'),
            'jenis_obat' => $request->input('jenis_obat'),
            'fungsi_obat' => $request->input('fungsi_obat'),
            'qty' => $request->input('qty'),
        ]);

        return redirect()->route('obat.index')->with('success', 'Data Obat Berhasil ditambahkan');
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
        $title = "Data Obat Edit";
        $data = Obat::find($id);
        return view('pages.dataobat.dataobat_edit',compact('title','data'));
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
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'fungsi_obat' => 'required',
            'qty' => 'required',
        ]);

        $obat = Obat::find($id);
        $obat->update([
            'nama_obat' => $request->input('nama_obat'),
            'jenis_obat' => $request->input('jenis_obat'),
            'fungsi_obat' => $request->input('fungsi_obat'),
            'qty' => $request->input('qty'),
        ]);
        $obat->save();

        return redirect()->route('obat.index')->with('success', 'Data Obat Berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::find($id);
        $obat->delete();
        return redirect()->route('obat.index')->with('success', 'Data Obat Berhasil dihapus');
    }
}
