<?php

// app/Http/Controllers/SuratController.php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $surats = Surat::all();
        return view('surat.index', compact('surats'));
    }

    public function create()
    {
        return view('surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal_surat' => 'required|date',
            'pengirim' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'jenis_surat' => 'required|string',
        ]);

        Surat::create($request->all());

        return redirect()->route('surat.index')->with('success', 'Surat berhasil ditambahkan.');
    }
}
