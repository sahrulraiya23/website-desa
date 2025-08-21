{{-- Anda bisa meng-extend layout admin jika ada, contoh: @extends('layouts.admin') --}}
@extends('layouts.app') {{-- Menggunakan layout app sebagai contoh --}}

@section('title', 'Proses Pengajuan Surat')

@section('content')
    <main class="main">
        <div class="container py-5">
            <h2>Proses Pengajuan Surat</h2>
            <p>Detail pengajuan dari Sdr/i {{ $surat->user->name }}.</p>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detail Pengajuan</h5>
                    <ul>
                        <li><strong>Pemohon:</strong> {{ $surat->user->name }}</li>
                        <li><strong>Jenis Surat:</strong> {{ $surat->jenis_surat }}</li>
                        <li><strong>Perihal:</strong> {{ $surat->perihal }}</li>
                        <li><strong>Keterangan:</strong> {{ $surat->keterangan_pemohon }}</li>
                    </ul>

                    <hr>

                    <h5 class="card-title mt-4">Form Proses Surat</h5>
                    <form action="{{ route('admin.surat.update', $surat->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <label for="nomor_surat" class="form-label">Nomor Surat</label>
                                <input type="text" name="nomor_surat" class="form-control" id="nomor_surat"
                                    value="{{ old('nomor_surat', $surat->nomor_surat) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                                <input type="date" class="form-control" name="tanggal_surat" id="tanggal_surat"
                                    value="{{ old('tanggal_surat', $surat->tanggal_surat) }}" required>
                            </div>
                            <div class="col-md-12">
                                <label for="status" class="form-label">Status Pengajuan</label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="pending" @if ($surat->status == 'pending') selected @endif>Pending
                                    </option>
                                    <option value="diproses" @if ($surat->status == 'diproses') selected @endif>Diproses
                                    </option>
                                    <option value="selesai" @if ($surat->status == 'selesai') selected @endif>Selesai
                                    </option>
                                    <option value="ditolak" @if ($surat->status == 'ditolak') selected @endif>Ditolak
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-12 text-end">
                                <a href="{{ route('admin.surat.index') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Update Status</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
