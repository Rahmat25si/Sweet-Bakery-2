<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menuFavorit = [
            [
                'nama'     => 'Croissant Premium',
                'harga'    => 'Rp 18.000',
                'gambar'   => 'assets/images/croissant.jpg',
                'fallback' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'nama'     => 'Chocolate Cake',
                'harga'    => 'Rp 95.000',
                'gambar'   => 'assets/images/chocolate-cake.jpg',
                'fallback' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'nama'     => 'Paket Roti Box',
                'harga'    => 'Rp 35.000',
                'gambar'   => 'assets/images/roti-box.jpg',
                'fallback' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        return view('welcome', compact('menuFavorit'));
    }

    public function menu()
    {
        $daftarMenu = [
            [
                'id'          => 1,
                'nama'        => 'Roti Sourdough Klasik',
                'kategori'    => 'Roti & Pastry',
                'harga'       => 15000,
                'harga_label' => 'Rp 15.000',
                'gambar'      => 'assets/images/sourdough.jpg',
                'fallback'    => 'https://images.unsplash.com/photo-1549931319-a545dcf3bc73?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id'          => 2,
                'nama'        => 'Brioche Keju Kepang',
                'kategori'    => 'Roti & Pastry',
                'harga'       => 22000,
                'harga_label' => 'Rp 22.000',
                'gambar'      => 'assets/images/brioche.jpg',
                'fallback'    => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id'          => 3,
                'nama'        => 'Paket Roti Box Mini',
                'kategori'    => 'Paket Hampers',
                'harga'       => 30000,
                'harga_label' => 'Rp 30.000',
                'gambar'      => 'assets/images/roti-box-mini.jpg',
                'fallback'    => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id'          => 4,
                'nama'        => 'Paket Hampers Spesial',
                'kategori'    => 'Paket Hampers',
                'harga'       => 45000,
                'harga_label' => 'Rp 45.000',
                'gambar'      => 'assets/images/hampers-spesial.jpg',
                'fallback'    => 'https://images.unsplash.com/photo-1558961363-fa8fdf82db35?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id'          => 5,
                'nama'        => 'Es Latte',
                'kategori'    => 'Minuman',
                'harga'       => 12000,
                'harga_label' => 'Rp 12.000',
                'gambar'      => 'assets/images/es-latte.jpg',
                'fallback'    => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id'          => 6,
                'nama'        => 'Roti Abon Sapi',
                'kategori'    => 'Roti & Pastry',
                'harga'       => 20000,
                'harga_label' => 'Rp 20.000',
                'gambar'      => 'assets/images/roti-abon.jpg',
                'fallback'    => 'https://images.unsplash.com/photo-1608198093002-ad4e005484ec?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        return view('menu', compact('daftarMenu'));
    }
}
