<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konsultasi;

class FrontendKonsulController extends Controller
{
    public function index()
    {
        $konsul = Konsultasi::all();
        return view('contact', compact('konsul'));
    }

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
        return redirect()->back();
    }
}
