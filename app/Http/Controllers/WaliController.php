<?php

namespace App\Http\Controllers;

use App\Wali;
use App\Mahasiswa;
use Illuminate\Http\Request;

class WaliController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wali = Wali::with('mahasiswa')->get();
        return view('wali.index',compact('wali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $mhs = Mahasiswa::all();
        return view('wali.create', compact('mhs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wali =new Wali();
        $wali->nama = $request->nama;
        $wali->id_mahasiswa = $request->id_mahasiswa;
        $wali->save();
        return redirect()->route('wali.index')->with(['message'=>'Data Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $wali = Wali::findOrFail($id);
        return view('wali.show',compact('wali'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wali  $Wali
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wali = Wali::findOrFail($id);
        $mhs = Mahasiswa::all();
        return view('wali.edit',compact('wali','mhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wali = Wali::findOrFail($id);
        $wali->nama = $request->nama;
        $wali->id_mahasiswa = $request->id_mahasiswa;
        $wali->save();
        return redirect()->route('wali.index')->with(['message'=>'Data Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wali = Wali::findOrFail($id)->delete();
        return redirect()->route('wali.index')->with(['message'=>'Data Berhasil Dihapus']);
    }
}
