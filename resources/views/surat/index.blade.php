@extends('layouts.app')

@section('title', 'Layanan Surat - Website Desa Ulu Kalo')

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Layanan Surat</h1>
                            <p class="mb-0">Administrasi surat menyurat Desa Ulu Kalo.</p>
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
                            Tambah Surat Baru
                        </a>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Surat</h5>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nomor Surat</th>
                                            <th scope="col">Tanggal Surat</th>
                                            <th scope="col">Pengirim</th>
                                            <th scope="col">Perihal</th>
                                            <th scope="col">Jenis Surat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($surats as $surat)
                                            <tr>
                                                <td>{{ $surat->nomor_surat }}</td>
                                                <td>{{ $surat->tanggal_surat }}</td>
                                                <td>{{ $surat->pengirim }}</td>
                                                <td>{{ $surat->perihal }}</td>
                                                <td>{{ $surat->jenis_surat }}</td>
                                            </tr>
                                        @endforeach
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
