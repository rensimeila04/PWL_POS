<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 11,
                'level_id' => 2,
                'username' => 'manaj',
                'nama' => 'Manajer',
                'password' => Hash::make('123456'),
            ],
        ];
        DB::table('m_user')->insert($data);
    }
}
