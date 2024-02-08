<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Users";
        $data = User::all();
        return view('pages.datausers.datausers',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Data Users Tambah";
        return view('pages.datausers.datausers_create',compact('title'));
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
            'name'=> 'required',
            'username'=> 'required',
            'role'=> 'required',
            'password'=> 'required',
            'confirm_password'=> 'required|same:password',
        ]);

        User::create([
            'name'=> $request->input('name'),
            'username'=> $request->input('username'),
            'role'=> $request->input('role'),
            'password'=> Hash::make($request->input('password')),
        ]);

        return redirect()->route('users.index')->with('success','user berhasil ditambahkan');
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
        $title = "Data Users Edit";
        $data = User::find($id);
        return view('pages.datausers.datausers_edit',compact('title','data'));
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
            'name'=> 'required',
            'username'=> 'required',
            'role'=> 'required',
        ]);

        $user = User::find($id);
        $user->update([
            'name'=> $request->input('name'),
            'username'=> $request->input('username'),
            'role'=> $request->input('role'),
        ]);

        $user->save();

        return redirect()->route('users.index')->with('success','user berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success','User berhasil didelete');
    }

    public function changepassword(Request $request,$id)
    {
        $request->validate([
            'password'=> 'required',
            'confirm_password'=> 'required|same:password',
        ]);

        $user = User::find($id);
        $user->update([
            'password'=> Hash::make($request->input('password')),
        ]);
        $user->save();

        return redirect()->route('users.index')->with('success','user berhasil diupdate');
    }
}
