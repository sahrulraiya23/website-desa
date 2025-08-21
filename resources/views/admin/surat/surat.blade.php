{{-- Anda bisa meng-extend layout admin jika ada, contoh: @extends('layouts.admin') --}}
@extends('layouts.app') {{-- Menggunakan layout app sebagai contoh --}}

@section('title', 'Manajemen Pengajuan Surat')

@section('content')
    <main class="main">
        <div class="container py-5">
            <h2>Manajemen Pengajuan Surat</h2>
            <p>Kelola semua pengajuan surat yang masuk dari masyarakat.</p>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Pengajuan Masuk</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal Masuk</th>
                                    <th>Pemohon</th>
                                    <th>Jenis Surat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($surats as $surat)
                                    <tr>
                                        <td>{{ $surat->created_at->format('d M Y H:i') }}</td>
                                        <td>{{ $surat->user->name }}</td>
                                        <td>{{ $surat->jenis_surat }}</td>
                                        <td>
                                            <span
                                                class="badge 
                                            @if ($surat->status == 'pending') bg-warning text-dark 
                                            @elseif($surat->status == 'selesai') bg-success 
                                            @elseif($surat->status == 'ditolak') bg-danger 
                                            @else bg-info @endif">
                                                {{ ucfirst($surat->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.surat.edit', $surat->id) }}"
                                                class="btn btn-sm btn-info">Proses</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
