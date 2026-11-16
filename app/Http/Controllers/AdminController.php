<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class AdminController extends Controller
{
    public function dashboard()
    {
        $jumlahPelangganDb = Pelanggan::count();

        $statistik = [
            'katalog_produk' => 24,
            'pesanan_masuk'  => 18,
            'pendapatan'     => 'Rp 1.250.000',
            'pelanggan_roti' => $jumlahPelangganDb > 0 ? $jumlahPelangganDb : 120,
        ];

        $grafikPenjualan = [
            ['hari' => 'Sen', 'persen' => 42, 'nominal' => 'Rp 145.000'],
            ['hari' => 'Sel', 'persen' => 64, 'nominal' => 'Rp 210.000'],
            ['hari' => 'Rab', 'persen' => 48, 'nominal' => 'Rp 165.000'],
            ['hari' => 'Kam', 'persen' => 82, 'nominal' => 'Rp 275.000'],
            ['hari' => 'Jum', 'persen' => 68, 'nominal' => 'Rp 225.000'],
            ['hari' => 'Sab', 'persen' => 95, 'nominal' => 'Rp 320.000'],
            ['hari' => 'Min', 'persen' => 78, 'nominal' => 'Rp 260.000'],
        ];

        return view('admin.dashboard', compact('statistik', 'grafikPenjualan'));
    }

    public function pesanan()
    {
        $daftarPesanan = [
            [
                'no'        => 1,
                'pelanggan' => 'Budi Santoso',
                'menu'      => 'Paket Hamper Cookies',
                'tanggal'   => '01/11/2026',
                'total'     => 'Rp 35.000',
                'status'    => 'Menunggu',
                'catatan'   => 'Mohon sertakan kartu ucapan terima kasih.',
            ],
            [
                'no'        => 2,
                'pelanggan' => 'Siti Aminah',
                'menu'      => 'Roti Tawar Gandum Spesial',
                'tanggal'   => '01/11/2026',
                'total'     => 'Rp 25.000',
                'status'    => 'Diproses',
                'catatan'   => 'Potong tebal standar bakery.',
            ],
            [
                'no'        => 3,
                'pelanggan' => 'Andi Pratama',
                'menu'      => 'Cake Ultah Spesial',
                'tanggal'   => '31/10/2026',
                'total'     => 'Rp 50.000',
                'status'    => 'Dikirim',
                'catatan'   => 'Tulisan di atas kue: Selamat Ulang Tahun.',
            ],
            [
                'no'        => 4,
                'pelanggan' => 'Rina Putri',
                'menu'      => 'Roti Brioche Keju Spesial',
                'tanggal'   => '31/10/2026',
                'total'     => 'Rp 30.000',
                'status'    => 'Selesai',
                'catatan'   => 'Pesanan diambil langsung di toko.',
            ],
        ];

        return view('admin.pesanan', compact('daftarPesanan'));
    }
}
