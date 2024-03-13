<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDate = now()->toDateTimeString();
        $data = [
            ['user_id' => 3, 'pembeli' => 'John Doe', 'penjualan_kode' => 'PJN001', 'password' => $currentDate],
            ['user_id' => 3, 'pembeli' => 'Jane Smith', 'penjualan_kode' => 'PJN002', 'password' => $currentDate],
            ['user_id' => 3, 'pembeli' => 'Michael Johnson', 'penjualan_kode' => 'PJN003', 'password' => $currentDate],
            ['user_id' => 3, 'pembeli' => 'Emily Brown', 'penjualan_kode' => 'PJN004', 'password' => $currentDate],
            ['user_id' => 3, 'pembeli' => 'David Williams', 'penjualan_kode' => 'PJN005', 'password' => $currentDate],
            ['user_id' => 3, 'pembeli' => 'Olivia Jones', 'penjualan_kode' => 'PJN006', 'password' => $currentDate],
            ['user_id' => 3, 'pembeli' => 'Daniel Wilson', 'penjualan_kode' => 'PJN007', 'password' => $currentDate],
            ['user_id' => 3, 'pembeli' => 'Sophia Davis', 'penjualan_kode' => 'PJN008', 'password' => $currentDate],
            ['user_id' => 3, 'pembeli' => 'James Miller', 'penjualan_kode' => 'PJN009', 'password' => $currentDate],
            ['user_id' => 3, 'pembeli' => 'Emma Garcia', 'penjualan_kode' => 'PJN010', 'password' => $currentDate],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
