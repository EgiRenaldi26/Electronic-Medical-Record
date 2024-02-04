<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $title = "Data Siswa";
        return view('pages.datasiswa.datasiswa',compact('title'));
    }

   
    public function create()
    {
        $title = "Data Siswa Tambah";
        return view('pages.datasiswa.datasiswa_create',compact('title'));
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        $title = "Data Siswa Edit";
        return view('pages.datasiswa.datasiswa_edit',compact('title'));
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
