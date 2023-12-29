<?php

namespace App\Http\Controllers;

use App\Models\Discution;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    public function index()
    {
        $pertanyaan = Discution::all();

        return view('diskusi', compact('pertanyaan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pertanyaan' => 'required',
        ]);

        Discution::create([
            'judul' => $request->judul,
            'pertanyaan' => $request->pertanyaan,
            'tanggal' => date('Y-m-d'),
            'waktu' => date('H:i:s'),
        ]);

        return redirect()->route('diskusi.index')->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    
    

}
