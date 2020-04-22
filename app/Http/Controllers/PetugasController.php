<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;


class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title='Petugas';
        $Petugas=Petugas::paginate(10);
        return view('admin.beranda',compact('title','Petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Petugas';
        return view('admin.inputpetugas',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'date' => 'Kolom :attribute harus berupa tanggal!',
            'numeric' => 'Kolom :attribute harus berupa angka!'
        ];

        $validasi =$request->validate([
            'no_tlpn' =>'numeric',
            'nama_petugas' =>'required',
            'alamat' => 'required',
            'status' => 'required'
        ],$messages);

        Petugas::create($validasi); //input ke database
        return redirect('/index')->with('success', 'Data berhasil di inputkan!'); //mengembalikan ke halaman beranda
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_petugas){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_petugas){
            $title='Edit Data Petugas';
            $Petugas=Petugas::find($Id_petugas);
            return view('admin.inputpetugas',compact('title','Petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_petugas){
        //validasi sisi server untuk mecegah kecurangan yang dilakukan oleh user
        $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'date' => 'Kolom :attribute harus berupa tanggal!',
            'numeric' => 'Kolom :attribute harus berupa angka!'
        ];

        $validasi =$request->validate([
            'nama_petugas' =>'required',
            'no_tlpn' =>'numeric',
            'status' => 'required',
            'alamat' => 'required'
        ],$messages);

        Petugas::whereId_petugas($Id_petugas)->update($validasi); //update ke database
        return redirect('/index')->with('success', 'Data berhasil di update!'); //mengembalikan ke halaman beranda
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_petugas){
        Petugas::whereId_petugas($Id_petugas)->delete(); //update ke database
        return redirect('/index')->with('success', 'Data berhasil di delete!'); //mengembalikan ke halaman beranda
        
    }
}
