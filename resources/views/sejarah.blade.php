@extends('layouts.app')

@section('title', 'Sejarah Desa - Website Desa Ulu Kalo')

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Sejarah Desa</h1>
                            <p class="mb-0">Perjalanan dan perkembangan Desa Ulu Kalo dari masa ke masa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="sejarah-content" class="sejarah-content section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Asal Usul</h2>
                        <p>
                            (Konten mengenai asal usul dan sejarah Desa Ulu Kalo akan ditampilkan di sini. Anda bisa
                            mengisinya melalui halaman admin.)
                        </p>

                        {{-- Tampilkan data dari database jika ada --}}
                        {{-- @if (isset($history))
                        {!! $history->content !!}
                    @endif --}}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
