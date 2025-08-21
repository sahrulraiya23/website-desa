@extends('layouts.app')

@section('title', 'Riwayat Pengajuan Surat - Website Desa Ulu Kalo')

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Layanan Surat</h1>
                            <p class="mb-0">Riwayat pengajuan surat Anda di Desa Ulu Kalo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="surat-content" class="surat-content section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{ route('surat.create') }}" class="btn btn-primary mb-4">
                            Ajukan Surat Baru
                        </a>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Riwayat Pengajuan Anda</h5>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal Pengajuan</th>
                                            <th scope="col">Jenis Surat</th>
                                            <th scope="col">Perihal</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Nomor Surat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($surats as $surat)
                                            <tr>
                                                <td>{{ $surat->created_at->format('d M Y') }}</td>
                                                <td>{{ $surat->jenis_surat }}</td>
                                                <td>{{ $surat->perihal }}</td>
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
                                                <td>{{ $surat->nomor_surat ?? '-' }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Anda belum pernah mengajukan surat.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
