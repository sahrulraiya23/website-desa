<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Beranda - Website Desa')

@section('content')
<!-- Hero Section -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4">Selamat Datang di Desa [Nama Desa]</h1>
                <p class="lead">Desa yang indah, sejahtera, dan penuh potensi</p>
                <a href="{{ route('potensi') }}" class="btn btn-light btn-lg">Jelajahi Potensi Desa</a>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi Section -->
@if($visionMission)
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Visi Desa</h2>
                <p class="lead">{{ $visionMission->vision }}</p>
            </div>
            <div class="col-lg-6">
                <h2>Misi Desa</h2>
                <ul>
                    @foreach($visionMission->missions as $mission)
                    <li>{{ $mission }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Sejarah Section -->
@if($histories->count() > 0)
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Sejarah Desa</h2>
        <div class="row">
            @foreach($histories as $history)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($history->image)
                    <img src="{{ asset('storage/' . $history->image) }}" class="card-img-top" alt="{{ $history->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $history->title }}</h5>
                        <p class="card-text">{{ Str::limit($history->content, 100) }}</p>
                        @if($history->year)
                        <small class="text-muted">Tahun: {{ $history->year }}</small>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('sejarah') }}" class="btn btn-primary">Lihat Semua Sejarah</a>
        </div>
    </div>
</section>
@endif

<!-- Potensi Desa Section -->
@if($potentials->count() > 0)
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Potensi Desa</h2>
        <div class="row">
            @foreach($potentials as $potential)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    @if($potential->image)
                    <img src="{{ asset('storage/' . $potential->image) }}" class="card-img-top" alt="{{ $potential->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $potential->title }}</h5>
                        <span class="badge bg-secondary">{{ $potential->category }}</span>
                        <p class="card-text mt-2">{{ Str::limit($potential->description, 80) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection