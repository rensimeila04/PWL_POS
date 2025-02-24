<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Rensi',
                'penjualan_kode' => 'P34567',
                'penjualan_tanggal' => Carbon::now()->subDays(9),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Dina',
                'penjualan_kode' => 'P34568',
                'penjualan_tanggal' => Carbon::now()->subDays(8),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Fajar',
                'penjualan_kode' => 'P34569',
                'penjualan_tanggal' => Carbon::now()->subDays(7),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'P34570',
                'penjualan_tanggal' => Carbon::now()->subDays(6),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Siti',
                'penjualan_kode' => 'P34571',
                'penjualan_tanggal' => Carbon::now()->subDays(5),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Andi',
                'penjualan_kode' => 'P34572',
                'penjualan_tanggal' => Carbon::now()->subDays(4),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Lina',
                'penjualan_kode' => 'P34573',
                'penjualan_tanggal' => Carbon::now()->subDays(3),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Taufiq',
                'penjualan_kode' => 'P34574',
                'penjualan_tanggal' => Carbon::now()->subDays(2),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Rizky',
                'penjualan_kode' => 'P34575',
                'penjualan_tanggal' => Carbon::now()->subDays(1),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Ayu',
                'penjualan_kode' => 'P34576',
                'penjualan_tanggal' => Carbon::now(),
            ],
        ];
        
        DB::table('t_penjualan')->insert($data);        
    }
}
