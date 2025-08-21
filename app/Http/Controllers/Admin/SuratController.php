<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Menampilkan daftar semua pengajuan surat.
     */
    public function index()
    {
        $surats = Surat::with('user')->latest()->get();
        return view('admin.surat.index', compact('surats'));
    }

    /**
     * Menampilkan form untuk memproses pengajuan surat.
     */
    public function edit(Surat $surat)
    {
        return view('admin.surat.edit', compact('surat'));
    }

    /**
     * Memperbarui data pengajuan surat (oleh admin).
     */
    public function update(Request $request, Surat $surat)
    {
        $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal_surat' => 'required|date',
            'status' => 'required|string|in:pending,diproses,selesai,ditolak',
        ]);

        $surat->update([
            'nomor_surat' => $request->nomor_surat,
            'tanggal_surat' => $request->tanggal_surat,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.surat.index')->with('success', 'Data pengajuan surat berhasil diperbarui.');
    }
}
