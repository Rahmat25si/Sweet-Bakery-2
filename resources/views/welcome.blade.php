<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Sweet Bakery</title>
    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom Style dari folder public -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">

    <style>
        :root {
            --sb-crimson: #D92648;
            --sb-crimson-dark: #b91c3a;
            --sb-bg: #F3F5F8;
            --sb-text: #1E2530;
            --sb-muted: #6C757D;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--sb-bg);
            color: var(--sb-text);
            margin: 0;
        }

        /* Navbar */
        .navbar-sb {
            background-color: #FFFFFF;
            padding: 0.95rem 0;
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.03);
        }

        .sb-logo {
            width: 36px;
            height: 36px;
            background-color: var(--sb-crimson);
            color: #FFFFFF;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 0.92rem;
            letter-spacing: -0.5px;
        }

        .navbar-sb .nav-link {
            color: var(--sb-text);
            font-size: 0.92rem;
            font-weight: 500;
            padding: 0.4rem 1.1rem;
            transition: color 0.2s;
        }

        .navbar-sb .nav-link:hover,
        .navbar-sb .nav-link.active {
            color: var(--sb-crimson);
            font-weight: 600;
        }

        .btn-sb {
            background-color: var(--sb-crimson);
            color: #FFFFFF;
            border: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 0.55rem 1.5rem;
            transition: all 0.2s ease;
        }

        .btn-sb:hover {
            background-color: var(--sb-crimson-dark);
            color: #FFFFFF;
        }

        /* Hero Section */
        .hero-box {
            background-color: #FFFFFF;
            border-radius: 16px;
            padding: 2.75rem 3rem;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.025);
        }

        .hero-heading {
            font-size: 2.35rem;
            font-weight: 800;
            line-height: 1.22;
            color: #212529;
            margin-bottom: 1rem;
        }

        .hero-desc {
            color: var(--sb-muted);
            font-size: 0.96rem;
            line-height: 1.65;
            margin-bottom: 1.75rem;
        }

        .hero-banner {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            height: 255px;
        }

        .hero-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-banner-caption {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(18, 14, 12, 0.72) 0%, rgba(18, 14, 12, 0.12) 65%, rgba(18, 14, 12, 0.35) 100%);
            color: #FFFFFF;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 1.4rem;
            text-align: center;
        }

        /* Menu Favorit */
        .section-heading {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--sb-text);
            margin-bottom: 1.4rem;
        }

        .menu-card {
            background-color: #FFFFFF;
            border-radius: 14px;
            padding: 1.1rem;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.025);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            height: 100%;
        }

        .menu-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
        }

        .menu-img-wrap {
            width: 100%;
            height: 185px;
            border-radius: 10px;
            overflow: hidden;
            background-color: #F8F9FA;
            margin-bottom: 1.1rem;
        }

        .menu-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .menu-title {
            font-size: 1.02rem;
            font-weight: 700;
            color: var(--sb-text);
            margin-bottom: 0.25rem;
        }

        .menu-price {
            font-size: 0.9rem;
            color: var(--sb-muted);
            font-weight: 500;
        }

        .btn-pesan {
            background-color: var(--sb-crimson);
            color: #FFFFFF;
            border: none;
            border-radius: 7px;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.45rem 1.35rem;
        }

        .btn-pesan:hover {
            background-color: var(--sb-crimson-dark);
            color: #FFFFFF;
        }

        @media (max-width: 767.98px) {
            .hero-box {
                padding: 1.75rem;
            }
            .hero-heading {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-sb sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-dark" href="{{ route('beranda') }}">
                <span class="sb-logo">SB</span>
                <span>Sweet Bakery</span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center me-lg-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalGaleri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalKontak">Kontak</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                    <button type="button" class="btn btn-link text-dark p-1" data-bs-toggle="collapse" data-bs-target="#searchCollapse" title="Cari Menu">
                        <i class="bi bi-search fs-5"></i>
                    </button>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-sb">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Pencarian Cepat (Tersembunyi sampai ikon kaca pembesar diklik) -->
    <div class="collapse bg-white border-bottom" id="searchCollapse">
        <div class="container py-2">
            <input type="text" id="searchMenuInput" class="form-control form-control-sm" placeholder="Ketik nama menu (contoh: Croissant, Chocolate Cake, Paket Roti Box)...">
        </div>
    </div>

    <!-- Konten Utama -->
    <main class="container py-4 my-2" id="beranda">
        <!-- Hero Card -->
        <section class="hero-box mb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h1 class="hero-heading">Nikmati Kehangatan Roti Premium Juara!</h1>
                    <p class="hero-desc">
                        Pesan hampers &amp; catering roti untuk acara Anda sekarang juga.<br class="d-none d-md-inline">
                        Pilihan menu lezat untuk kebutuhan harian dan acara.
                    </p>
                    <a href="{{ route('menu') }}" class="btn btn-sb">Lihat Menu</a>
                </div>
                <div class="col-lg-6">
                    <div class="hero-banner">
                        <img src="{{ asset('assets/images/banner-bakery.jpg') }}"
                             onerror="this.src='https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=900&q=80'"
                             alt="Sweet Bakery Banner">
                        <div class="hero-banner-caption px-3">
                            <h4 class="fw-extrabold mb-1" style="letter-spacing: 1px;">SWEET BAKERY</h4>
                            <p class="small mb-0">Nikmati Kelezatan Roti &amp; Cake Premium JUARA!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Menu Favorit -->
        <section id="menu-favorit" class="pb-4">
            <h2 class="section-heading">Menu Favorit</h2>
            <div class="row g-4">
                @foreach ($menuFavorit as $item)
                <div class="col-md-4 menu-item-col">
                    <div class="menu-card d-flex flex-column justify-content-between">
                        <div>
                            <div class="menu-img-wrap">
                                <img src="{{ asset($item['gambar']) }}"
                                     onerror="this.src='{{ $item['fallback'] }}'"
                                     alt="{{ $item['nama'] }}">
                            </div>
                            <h3 class="menu-title">{{ $item['nama'] }}</h3>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <span class="menu-price">{{ $item['harga'] }}</span>
                            <button type="button"
                                    class="btn btn-pesan"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalPesan"
                                    data-nama="{{ $item['nama'] }}"
                                    data-harga="{{ $item['harga'] }}">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>

    <!-- Modal Pemesanan (Terhubung ke QuestionController modul) -->
    <div class="modal fade" id="modalPesan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">Pesan Menu Sweet Bakery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('question.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="nama@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Detail Pesanan</label>
                            <textarea name="pertanyaan" id="inputDetailPesanan" rows="3" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-sb">Kirim Pesanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Galeri -->
    <div class="modal fade" id="modalGaleri" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Galeri Produk Sweet Bakery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row g-3">
                        @foreach ($menuFavorit as $foto)
                        <div class="col-md-4">
                            <img src="{{ asset($foto['gambar']) }}"
                                 onerror="this.src='{{ $foto['fallback'] }}'"
                                 class="w-100 rounded-3" style="height: 170px; object-fit: cover;" alt="{{ $foto['nama'] }}">
                            <p class="small fw-semibold text-center mt-2 mb-0">{{ $foto['nama'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kontak -->
    <div class="modal fade" id="modalKontak" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Kontak Sweet Bakery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pt-0">
                    <p class="text-muted small mb-3">Hubungi kami untuk pemesanan hampers, catering acara, atau pesanan harian:</p>
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i>Pekanbaru, Riau</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill text-danger me-2"></i>0812-3456-7890</li>
                        <li><i class="bi bi-envelope-fill text-danger me-2"></i>sweetbakery@email.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Otomatis mengisi detail pesanan saat tombol Pesan diklik
        document.getElementById('modalPesan').addEventListener('show.bs.modal', function (event) {
            const btn = event.relatedTarget;
            const nama = btn.getAttribute('data-nama');
            const harga = btn.getAttribute('data-harga');
            document.getElementById('inputDetailPesanan').value = 'Pesanan: ' + nama + ' (' + harga + ')\nJumlah: 1';
        });

        // Filter pencarian menu
        document.getElementById('searchMenuInput').addEventListener('keyup', function () {
            const keyword = this.value.toLowerCase();
            document.querySelectorAll('.menu-item-col').forEach(function (col) {
                col.style.display = col.innerText.toLowerCase().includes(keyword) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
