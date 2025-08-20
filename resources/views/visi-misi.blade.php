@extends('layouts.app')

@section('title', 'Visi & Misi Desa - Website Desa Ulu Kalo')

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Visi & Misi Desa</h1>
                            <p class="mb-0">Arah dan tujuan pembangunan Desa Ulu Kalo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="visimisi-content" class="visimisi-content section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Visi</h2>
                        <p>
                            (Konten visi Desa Ulu Kalo akan ditampilkan di sini.)
                        </p>
                        <hr>
                        <h2>Misi</h2>
                        <p>
                            (Konten misi Desa Ulu Kalo akan ditampilkan di sini.)
                        </p>

                        {{-- Tampilkan data dari database jika ada --}}
                        {{-- @if (isset($visionMission))
                        {!! $visionMission->content !!}
                    @endif --}}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
