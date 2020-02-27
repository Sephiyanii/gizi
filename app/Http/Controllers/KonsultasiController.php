<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konsultasi;
use Session;

class KonsultasiController extends Controller
{
    public function frontend()
    {
        $konsul = Konsultasi::all();
        return view('contact', compact('konsul'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $konsul = Konsultasi::all();
        return view('backend.konsultasi.index', compact('konsul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.konsultasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $konsul = new Konsultasi;
        $konsul->nama = $request->get('nama');
        $konsul->email = $request->get('email');
        $konsul->pesan = $request->get('pesan');
        $konsul->save();

        Session::flash("flash_notofication", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>$konsul->nama</b>"
        ]);
        return redirect()->route('Konsul.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $konsul = Konsultasi::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data berhasil dihapus"
        ]);
        return redirect()->route('Konsul.index');
    }
}
