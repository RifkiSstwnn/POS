<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDate = now()->toDateTimeString();

        $data = [
            [
                'barang_id' => 11,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 50,
            ],
            [
                'barang_id' => 12,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 40,
            ],
            [
                'barang_id' => 13,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 30,
            ],
            [
                'barang_id' => 14,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 20,
            ],
            [
                'barang_id' => 15,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 25,
            ],
            [
                'barang_id' => 16,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 35,
            ],
            [
                'barang_id' => 17,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 15,
            ],
            [
                'barang_id' => 18,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 10,
            ],
            [
                'barang_id' => 19,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 20,
            ],
            [
                'barang_id' => 20,
                'user_id' => 1,
                'stok_tanggal' => $currentDate,
                'stok_jumlah' => 30,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
