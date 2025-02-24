<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'Kategori_kode' => 'BTH',
                'Kategori_nama' => 'Beauty and Health'
            ],
            [
                'kategori_id' => 2,
                'Kategori_kode' => 'ELC',
                'Kategori_nama' => 'Electronics'
            ],
            [
                'kategori_id' => 3,
                'Kategori_kode' => 'FAS',
                'Kategori_nama' => 'Fashion'
            ],
            [
                'kategori_id' => 4,
                'Kategori_kode' => 'FNB',
                'Kategori_nama' => 'Food and Beverages'
            ],
            [
                'kategori_id' => 5,
                'Kategori_kode' => 'SPR',
                'Kategori_nama' => 'Sports'
            ]
        ];
        DB::table('m_kategori')->insert($data);
    }
}
