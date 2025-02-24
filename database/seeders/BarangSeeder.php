<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'SKTF',
                'barang_nama' => 'Skintific',
                'harga_beli' => 100000,
                'harga_jual' => 130000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'WRDH',
                'barang_nama' => 'Wardah Sunscreen',
                'harga_beli' => 50000,
                'harga_jual' => 70000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'XRN12',
                'barang_nama' => 'Xiaomi Redmi Note 12',
                'harga_beli' => 2500000,
                'harga_jual' => 2700000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'SMTV42',
                'barang_nama' => 'Samsung Smart TV 42"',
                'harga_beli' => 4000000,
                'harga_jual' => 4300000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'NAF1',
                'barang_nama' => 'Nike Air Force 1',
                'harga_beli' => 1200000,
                'harga_jual' => 1400000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'LJ501',
                'barang_nama' => 'Levi’s Jeans 501',
                'harga_beli' => 600000,
                'harga_jual' => 750000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'INDM1',
                'barang_nama' => 'Indomie Goreng 1 Dus',
                'harga_beli' => 85000,
                'harga_jual' => 100000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'NPL600',
                'barang_nama' => 'Nestlé Pure Life 600ml (1 Karton)',
                'harga_beli' => 30000,
                'harga_jual' => 40000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'APSS',
                'barang_nama' => 'Adidas Predator Soccer Shoes',
                'harga_beli' => 1500000,
                'harga_jual' => 1700000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'YBRT',
                'barang_nama' => 'Yonex Badminton Racket',
                'harga_beli' => 800000,
                'harga_jual' => 950000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
