<?php

namespace App\Http\Controllers;

use App\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
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
        $hobi = Hobi::all();
        return view('hobi.index',compact('hobi'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hobi = new Hobi();
        $hobi->hobi = $request->hobi;
        $hobi->save();
        return redirect()->route('hobi.index')->with(['message'=>'hobi Berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hobi = hobi::findOrFail($id);
        return view('hobi.show',compact('hobi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $hobi = hobi::findOrFail($id);
        return view('hobi.edit',compact('hobi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hobi = hobi::findOrFail($id);
        $hobi->hobi = $request->nama;
        $hobi->save();
        return redirect()->route('hobi.index')->with(['message'=>'hobi Berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hobi = hobi::findOrFail($id)->delete();
        return redirect()->route('hobi.index')->with(['message'=>'hobi Berhasil dihapus']);
    }
}
