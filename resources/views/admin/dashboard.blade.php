    <!-- resources/views/admin/dashboard.blade.php -->
    @extends('layouts.app')

    @section('title', 'Dashboard Admin')

    @section('content')
        <div class="container-fluid">
            <h1>Dashboard Admin</h1>

            <div class="row">
                {{-- Card Sejarah Desa --}}
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Sejarah Desa</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ App\Models\VillageHistory::count() }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-history fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- MENU SURAT DITAMBAHKAN DI SINI --}}
                <div class="col-xl-3 col-md-6 mb-4">
                    {{-- Seluruh card ini adalah link ke halaman surat admin --}}
                    <a href="{{ route('admin.surat.surat') }}" style="text-decoration: none; color: inherit;">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Pengajuan Surat</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{-- Menampilkan jumlah surat yang masih 'pending' --}}
                                            {{ App\Models\Surat::where('status', 'pending')->count() }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- AKHIR DARI MENU SURAT --}}

                <!-- Tambahkan card statistik lainnya -->
            </div>
        </div>
    @endsection
