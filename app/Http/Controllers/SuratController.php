<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    /**
     * Menampilkan riwayat pengajuan surat oleh pengguna yang sedang login.
     */
    public function index()
    {
        $surats = Surat::where('user_id', Auth::id())->latest()->get();
        return view('surat.index', compact('surats'));
    }

    /**
     * Menampilkan form untuk membuat pengajuan surat baru.
     */
    public function create()
    {
        return view('surat.create');
    }

    /**
     * Menyimpan pengajuan surat baru dari pengguna.
     */
    public function store(Request $request)
    {
        $request->validate([
            'perihal' => 'required|string|max:255',
            'jenis_surat' => 'required|string',
            'keterangan_pemohon' => 'required|string',
        ]);

        Surat::create([
            'user_id' => Auth::id(),
            'pengirim' => Auth::user()->name, // Mengambil nama dari user yang login
            'perihal' => $request->perihal,
            'jenis_surat' => $request->jenis_surat,
            'keterangan_pemohon' => $request->keterangan_pemohon,
            'status' => 'pending', // Status awal pengajuan
        ]);

        return redirect()->route('surat.index')->with('success', 'Pengajuan surat berhasil dikirim.');
    }
}
