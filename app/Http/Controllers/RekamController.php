<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\RiwayatPasien;
use App\Models\Siswa;
use Illuminate\Http\Request;

class RekamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Rekam Medis";
        $data = RiwayatPasien::all();
        return view('pages.rekam.rekam',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Rekam Tambah";
        $siswa = Siswa::all();
        $obat = Obat::all();
        return view('pages.rekam.rekam_create',compact('title','siswa','obat'));
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
            'siswa_id' => 'required',
            'tanggal_masuk' => 'required',
            'keluhan' => 'required',
            'obat' => 'required|array',
            'qty' => 'required|array',
            'ket' => 'required',

        ]);

        $obatIds = $request->input('obatId');
        $qtys = $request->input('qty');

        RiwayatPasien::create([
            'siswa_id' => $request->input('siswa_id'),
            'tanggal_masuk' => $request->input('tanggal_masuk'),
            'keluhan' => $request->input('keluhan'),
            'ket' => $request->input('ket'),
            'obat' => $this->prepareObat($obatIds,$qtys),
        ]);

        foreach ($request->obatId as $key => $obatId) {
            $obat = Obat::find($obatId);
            $qty = $request->qty[$key];
            $obat->qty -= $qty;
            if($obat->qty = 0){
                return back()->with('error', 'Stok Obat Tidak Cukup');
            }else{
                $obat->save();
            }
        }

        return redirect()->route('rekam.index')->with('success', 'Data Riwayat Pasien Berhasil ditambahkan');
    }

    private function prepareObat($obatIds, $qtys)
    {
        $preparedobat = [];

        foreach ($obatIds as $index => $obatId) {
            $preparedobat[] = [
                'obatId' => $obatId,
                'qty' => $qtys[$index],
            ];
        }

        return $preparedobat;
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
        $title = "Rekam Edit";
        $data = RiwayatPasien::find($id);
        $siswa = Siswa::all();
        $obat = Obat::all();
        return view('pages.rekam.rekam_edit',compact('title','data','obat','siswa'));
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
            'siswa_id' => 'required',
            'tanggal_masuk' => 'required',
            'keluhan' => 'required',
            'obat' => 'required|array',
            'qty' => 'required|array',
            'ket' => 'required',

        ]);

        $obatIds = $request->input('obatId');
        $qtys = $request->input('qty');

        $riwayat = RiwayatPasien::find($id);

        $riwayat->update([
            'siswa_id' => $request->input('siswa_id'),
            'tanggal_masuk' => $request->input('tanggal_masuk'),
            'keluhan' => $request->input('keluhan'),
            'ket' => $request->input('ket'),
            'obat' => $this->prepareObat($obatIds,$qtys),
        ]);

        foreach ($request->obatId as $key => $obatId) {
            $obat = Obat::find($obatId);
            $qty = $request->qty[$key];
            $obat->qty -= $qty;

            if($obat->qty = 0){
                return back()->with('error', 'Stok Obat Tidak Cukup');
            }else{
                $obat->save();
            }
        }

        $riwayat->save();

        return redirect()->route('rekam.index')->with('success', 'Data Riwayat Pasien Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $riwayat = RiwayatPasien::find($id);
        $riwayat->delete();
        return redirect()->route('rekam.index')->with('success', 'Data Riwayat Pasien Berhasil dihapus');
    }
}
