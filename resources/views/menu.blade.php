<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu - Sweet Bakery</title>
    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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

        /* Header Daftar Menu */
        .page-title {
            font-size: 1.85rem;
            font-weight: 800;
            color: #212529;
            margin-bottom: 0.25rem;
        }

        .page-subtitle {
            color: var(--sb-muted);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        /* Filter Pill Tabs */
        .filter-pill {
            background-color: #FFFFFF;
            color: var(--sb-text);
            border: 1px solid #E5E8EC;
            border-radius: 50px;
            padding: 0.45rem 1.35rem;
            font-size: 0.88rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .filter-pill:hover {
            border-color: var(--sb-crimson);
            color: var(--sb-crimson);
        }

        .filter-pill.active {
            background-color: var(--sb-crimson);
            color: #FFFFFF;
            border-color: var(--sb-crimson);
        }

        .btn-cart-icon {
            background-color: #FFFFFF;
            border: 1px solid #E5E8EC;
            color: var(--sb-text);
            border-radius: 50px;
            padding: 0.45rem 1rem;
            position: relative;
            transition: all 0.2s ease;
        }

        .btn-cart-icon:hover {
            border-color: var(--sb-crimson);
            color: var(--sb-crimson);
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--sb-crimson);
            color: #FFFFFF;
            font-size: 0.7rem;
            font-weight: 700;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Kartu Produk */
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

        .btn-tambah {
            background-color: var(--sb-crimson);
            color: #FFFFFF;
            border: none;
            border-radius: 7px;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.45rem 1.35rem;
            transition: background-color 0.2s;
        }

        .btn-tambah:hover {
            background-color: var(--sb-crimson-dark);
            color: #FFFFFF;
        }
    </style>
</head>
<body>

    <!-- Navbar (Konsisten dengan Beranda, Menu aktif) -->
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
                        <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda') }}#galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda') }}#kontak">Kontak</a>
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

    <!-- Pencarian Cepat -->
    <div class="collapse bg-white border-bottom" id="searchCollapse">
        <div class="container py-2">
            <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Cari Roti Sourdough, Brioche, Paket Hampers, Es Latte...">
        </div>
    </div>

    <!-- Konten Daftar Menu -->
    <main class="container py-4 my-2">
        <div class="mb-4">
            <h1 class="page-title">Daftar Menu</h1>
            <p class="page-subtitle">Pilih roti favorit Anda</p>

            <!-- Filter Kategori & Ikon Keranjang -->
            <div class="d-flex flex-wrap align-items-center gap-2">
                <button type="button" class="filter-pill active" data-filter="Semua">Semua</button>
                <button type="button" class="filter-pill" data-filter="Roti & Pastry">Roti &amp; Pastry</button>
                <button type="button" class="filter-pill" data-filter="Paket Hampers">Paket Hampers</button>
                <button type="button" class="filter-pill" data-filter="Minuman">Minuman</button>

                <button type="button" class="btn-cart-icon ms-1" data-bs-toggle="modal" data-bs-target="#modalKeranjang" title="Lihat Keranjang">
                    <i class="bi bi-cart3 fs-6"></i>
                    <span class="cart-badge" id="cartCount">0</span>
                </button>
            </div>
        </div>

        <!-- Grid Katalog Produk (3 Kolom x 2 Baris) -->
        <div class="row g-4 pb-5" id="menuGrid">
            @foreach ($daftarMenu as $item)
            <div class="col-md-4 menu-col" data-kategori="{{ $item['kategori'] }}">
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
                        <span class="menu-price">{{ $item['harga_label'] }}</span>
                        <button type="button"
                                class="btn btn-tambah btn-add-cart"
                                data-id="{{ $item['id'] }}"
                                data-nama="{{ $item['nama'] }}"
                                data-harga="{{ $item['harga'] }}">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <!-- Modal Keranjang & Checkout (Terhubung ke QuestionController modul) -->
    <div class="modal fade" id="modalKeranjang" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">Keranjang Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('question.store') }}" method="POST" id="formCheckout">
                    @csrf
                    <div class="modal-body">
                        <div id="cartItemsContainer" class="mb-3">
                            <p class="text-muted small text-center py-3 mb-0">Keranjang masih kosong. Silakan klik tombol <strong>Tambah</strong> pada menu.</p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center border-top pt-2 mb-3">
                            <span class="fw-semibold small">Total Pembayaran</span>
                            <span class="fw-bold text-danger" id="cartTotal">Rp 0</span>
                        </div>

                        <div class="mb-2">
                            <label class="form-label small fw-semibold">Nama Pemesan</label>
                            <input type="text" name="nama" class="form-control form-control-sm" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label small fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control form-control-sm" placeholder="nama@email.com" required>
                        </div>
                        <input type="hidden" name="pertanyaan" id="ringkasanPesananInput">
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-sb btn-sm" id="btnCheckoutSubmit" disabled>Pesan Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let activeCategory = 'Semua';
        let searchKeyword = '';
        let cart = [];

        // Filter Kategori & Pencarian Gabungan
        function filterMenu() {
            document.querySelectorAll('.menu-col').forEach(col => {
                const kategori = col.getAttribute('data-kategori');
                const teks = col.innerText.toLowerCase();
                const cocokKategori = (activeCategory === 'Semua' || kategori === activeCategory);
                const cocokCari = teks.includes(searchKeyword);

                col.style.display = (cocokKategori && cocokCari) ? '' : 'none';
            });
        }

        document.querySelectorAll('.filter-pill').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                activeCategory = this.getAttribute('data-filter');
                filterMenu();
            });
        });

        document.getElementById('searchInput').addEventListener('keyup', function () {
            searchKeyword = this.value.toLowerCase();
            filterMenu();
        });

        // Tambah ke Keranjang
        document.querySelectorAll('.btn-add-cart').forEach(btn => {
            btn.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama');
                const harga = parseInt(this.getAttribute('data-harga'));

                const existing = cart.find(item => item.id === id);
                if (existing) {
                    existing.qty += 1;
                } else {
                    cart.push({ id, nama, harga, qty: 1 });
                }

                // Efek feedback singkat pada tombol
                const originalText = this.innerText;
                this.innerText = '✓ Ditambah';
                setTimeout(() => { this.innerText = originalText; }, 700);

                renderCart();
            });
        });

        function ubahQty(id, delta) {
            const index = cart.findIndex(item => item.id === id);
            if (index > -1) {
                cart[index].qty += delta;
                if (cart[index].qty <= 0) {
                    cart.splice(index, 1);
                }
            }
            renderCart();
        }

        function renderCart() {
            const container = document.getElementById('cartItemsContainer');
            const badge = document.getElementById('cartCount');
            const totalEl = document.getElementById('cartTotal');
            const submitBtn = document.getElementById('btnCheckoutSubmit');
            const ringkasanInput = document.getElementById('ringkasanPesananInput');

            const totalQty = cart.reduce((sum, item) => sum + item.qty, 0);
            const totalHarga = cart.reduce((sum, item) => sum + (item.harga * item.qty), 0);

            badge.innerText = totalQty;
            totalEl.innerText = 'Rp ' + totalHarga.toLocaleString('id-ID');

            if (cart.length === 0) {
                container.innerHTML = '<p class="text-muted small text-center py-3 mb-0">Keranjang masih kosong. Silakan klik tombol <strong>Tambah</strong> pada menu.</p>';
                submitBtn.disabled = true;
                ringkasanInput.value = '';
                return;
            }

            submitBtn.disabled = false;
            let html = '<ul class="list-group list-group-flush">';
            let ringkasanTeks = 'Pesanan dari Halaman Daftar Menu:\n';

            cart.forEach(item => {
                const subtotal = item.harga * item.qty;
                ringkasanTeks += `- ${item.nama} (${item.qty}x) = Rp ${subtotal.toLocaleString('id-ID')}\n`;

                html += `
                    <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fw-semibold small">${item.nama}</div>
                            <div class="text-muted" style="font-size: 0.78rem;">Rp ${item.harga.toLocaleString('id-ID')}</div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <button type="button" class="btn btn-outline-secondary btn-sm py-0 px-2" onclick="ubahQty('${item.id}', -1)">-</button>
                            <span class="small fw-bold">${item.qty}</span>
                            <button type="button" class="btn btn-outline-secondary btn-sm py-0 px-2" onclick="ubahQty('${item.id}', 1)">+</button>
                        </div>
                    </li>
                `;
            });

            html += '</ul>';
            ringkasanTeks += `Total: Rp ${totalHarga.toLocaleString('id-ID')}`;

            container.innerHTML = html;
            ringkasanInput.value = ringkasanTeks;
        }
    </script>
</body>
</html>
