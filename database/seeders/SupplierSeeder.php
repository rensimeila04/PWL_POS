<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            [
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT. Sumber Makmur',
                'supplier_alamat' => 'Jl. Raya No. 123, Jakarta',
                'supplier_telepon' => '081234567890',
            ],
            [
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV. Jaya Abadi',
                'supplier_alamat' => 'Jl. Melati No. 45, Surabaya',
                'supplier_telepon' => '082345678901',
            ],
            [
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'UD. Sentosa',
                'supplier_alamat' => 'Jl. Pahlawan No. 78, Bandung',
                'supplier_telepon' => '083456789012',
            ],
        ];

        DB::table('m_supplier')->insert($suppliers);  
    }
}
