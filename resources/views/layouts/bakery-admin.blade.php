<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin') - Sweet Bakery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --sb-sidebar: #141B2D;
            --sb-crimson: #D92648;
            --sb-crimson-hover: #b81d3b;
            --sb-bg: #F4F6F9;
            --sb-text: #1E2530;
            --sb-muted: #6C757D;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--sb-bg);
            color: var(--sb-text);
            margin: 0;
        }

        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .admin-sidebar {
            width: 250px;
            background-color: var(--sb-sidebar);
            color: #FFFFFF;
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .brand-circle {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: linear-gradient(135deg, #b91c3a, #e11d48);
            border: 2px solid rgba(255, 255, 255, 0.25);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.65rem;
            font-weight: 800;
            font-size: 0.95rem;
            color: #FDE68A;
        }

        .sidebar-nav .nav-link {
            color: #CBD5E1;
            font-size: 0.88rem;
            font-weight: 500;
            padding: 0.7rem 1rem;
            border-radius: 8px;
            margin-bottom: 0.35rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.2s ease;
        }

        .sidebar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.08);
            color: #FFFFFF;
        }

        .sidebar-nav .nav-link.active {
            background-color: var(--sb-crimson);
            color: #FFFFFF;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(217, 38, 72, 0.35);
        }

        /* Main Area */
        .admin-main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .admin-topbar {
            background-color: #FFFFFF;
            padding: 0.9rem 2rem;
            border-bottom: 1px solid #EAECEF;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .admin-content {
            padding: 2rem;
            flex-grow: 1;
        }

        @media (max-width: 991.98px) {
            .admin-wrapper {
                flex-direction: column;
            }
            .admin-sidebar {
                width: 100%;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

<div class="admin-wrapper">
    <!-- Sidebar Kiri -->
    <aside class="admin-sidebar">
        <div class="text-center mb-4 pb-2 border-bottom border-secondary border-opacity-25">
            <div class="brand-circle">
                <i class="bi bi-shop fs-5"></i>
                <span style="font-size: 0.65rem; letter-spacing: 0.5px;">SB</span>
            </div>
            <div class="fw-bold small">Admin Sweet Bakery</div>
        </div>

        <nav class="nav flex-column sidebar-nav">
            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Dashboard</span>
            </a>
            <a class="nav-link" href="{{ route('menu') }}">
                <i class="bi bi-box-seam"></i>
                <span>Katalog Produk Roti</span>
            </a>
            <a class="nav-link {{ request()->routeIs('admin.pesanan') ? 'active' : '' }}" href="{{ route('admin.pesanan') }}">
                <i class="bi bi-cart-check"></i>
                <span>Pesanan Masuk</span>
            </a>
            <a class="nav-link" href="{{ route('admin.dashboard') }}#grafik-penjualan">
                <i class="bi bi-bar-chart-line"></i>
                <span>Laporan Penjualan</span>
            </a>
            <!-- Terhubung langsung ke CRUD Pelanggan & User dari Modul -->
            <a class="nav-link" href="{{ route('pelanggan.index') }}">
                <i class="bi bi-people"></i>
                <span>Data Pelanggan Roti</span>
            </a>
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="bi bi-gear"></i>
                <span>Pengaturan Admin</span>
            </a>
        </nav>

        <div class="mt-auto pt-4">
            <a href="{{ route('beranda') }}" class="btn btn-outline-light btn-sm w-100 rounded-3">
                <i class="bi bi-arrow-left me-1"></i> Ke Halaman Web
            </a>
        </div>
    </aside>

    <!-- Konten Kanan -->
    <div class="admin-main">
        <header class="admin-topbar">
            <span class="fw-semibold text-dark">@yield('topbar_title', 'Dashboard')</span>
            <div class="dropdown">
                <button class="btn btn-light btn-sm d-flex align-items-center gap-2 rounded-pill px-3" type="button" data-bs-toggle="dropdown">
                    <span class="bg-danger text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 24px; height: 24px; font-size: 0.75rem;">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <span class="small fw-semibold">Admin</span>
                    <i class="bi bi-chevron-down small"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                    <li><a class="dropdown-item small" href="{{ route('beranda') }}">Lihat Website</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item small text-danger" href="{{ route('beranda') }}">Keluar</a></li>
                </ul>
            </div>
        </header>

        <main class="admin-content">
            @yield('content')
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
