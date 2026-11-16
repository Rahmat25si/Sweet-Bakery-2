@extends('layouts.bakery-admin')

@section('title', 'Dashboard Admin')
@section('topbar_title', 'Dashboard')

@push('styles')
<style>
    .stat-card {
        background-color: #FFFFFF;
        border-radius: 14px;
        padding: 1.35rem 1.5rem;
        box-shadow: 0 3px 14px rgba(0, 0, 0, 0.025);
        border: 1px solid #F0F2F5;
        height: 100%;
    }

    .stat-label {
        font-size: 0.82rem;
        color: #6C757D;
        font-weight: 500;
    }

    .stat-value {
        font-size: 1.45rem;
        font-weight: 800;
        color: #1E2530;
        margin-top: 0.4rem;
    }

    .stat-icon {
        font-size: 1.25rem;
        color: #8C7A6B;
    }

    /* Grafik Penjualan Batang Emas */
    .chart-card {
        background-color: #FFFFFF;
        border-radius: 16px;
        padding: 1.75rem 2rem;
        box-shadow: 0 3px 14px rgba(0, 0, 0, 0.025);
        border: 1px solid #F0F2F5;
    }

    .bar-chart-area {
        height: 250px;
        display: flex;
        align-items: flex-end;
        justify-content: space-around;
        padding-top: 2rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #ECEEF2;
        gap: 1rem;
    }

    .bar-column {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
        justify-content: flex-end;
        flex: 1;
        max-width: 56px;
    }

    .bar-fill {
        width: 34px;
        border-radius: 6px 6px 2px 2px;
        background: linear-gradient(180deg, #9C6226 0%, #D99B52 55%, #B57834 100%);
        transition: transform 0.2s ease, filter 0.2s ease;
        position: relative;
        cursor: pointer;
    }

    .bar-fill:hover {
        transform: scaleY(1.04);
        filter: brightness(1.08);
    }

    .bar-day {
        font-size: 0.8rem;
        color: #6C757D;
        font-weight: 600;
        margin-top: 0.65rem;
        text-align: center;
    }
</style>
@endpush

@section('content')
    <div class="mb-4">
        <h2 class="h4 fw-bold mb-1">Selamat datang, Admin!</h2>
        <p class="text-muted small mb-0">Ringkasan aktivitas Sweet Bakery. Pusat panggangan harian Anda.</p>
    </div>

    <!-- 4 Kartu Statistik -->
    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="stat-label">Katalog Produk</span>
                    <i class="bi bi-grid stat-icon"></i>
                </div>
                <div class="stat-value">{{ $statistik['katalog_produk'] }}</div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="stat-label">Pesanan Masuk</span>
                    <i class="bi bi-cart3 stat-icon"></i>
                </div>
                <div class="stat-value">{{ $statistik['pesanan_masuk'] }}</div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="stat-label">Pendapatan</span>
                    <i class="bi bi-cash-stack stat-icon"></i>
                </div>
                <div class="stat-value">{{ $statistik['pendapatan'] }}</div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="stat-label">Pelanggan Roti</span>
                    <i class="bi bi-people stat-icon"></i>
                </div>
                <div class="stat-value">{{ $statistik['pelanggan_roti'] }}</div>
            </div>
        </div>
    </div>

    <!-- Grafik Penjualan 7 Hari Terakhir -->
    <div class="chart-card" id="grafik-penjualan">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="h6 fw-bold mb-0">Grafik Penjualan</h3>
            <span class="text-muted small">7 Hari Terakhir</span>
        </div>

        <div class="bar-chart-area">
            @foreach ($grafikPenjualan as $bar)
            <div class="bar-column">
                <div class="bar-fill"
                     style="height: {{ $bar['persen'] }}%;"
                     title="{{ $bar['hari'] }}: {{ $bar['nominal'] }}">
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-around pt-1" style="gap: 1rem;">
            @foreach ($grafikPenjualan as $bar)
            <div class="bar-day" style="flex: 1; max-width: 56px;">{{ $bar['hari'] }}</div>
            @endforeach
        </div>
    </div>
@endsection
