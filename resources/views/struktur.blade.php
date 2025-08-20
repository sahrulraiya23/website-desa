@extends('layouts.app')

@section('title', 'Struktur Desa - Website Desa Ulu Kalo')

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Struktur Organisasi Desa</h1>
                            <p class="mb-0">Struktur pemerintahan Desa Ulu Kalo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="struktur-content" class="struktur-content section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2>Bagan Struktur Organisasi</h2>
                        <p>
                            (Gambar bagan struktur organisasi akan ditampilkan di sini. Anda bisa mengunggahnya melalui
                            halaman admin.)
                        </p>

                        {{-- Tampilkan gambar struktur dari database jika ada --}}
                        {{-- @if (isset($structure) && $structure->image)
                        <img src="{{ asset('storage/' . $structure->image) }}" class="img-fluid" alt="Struktur Desa Ulu Kalo">
                    @endif --}}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
