<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Penjualan_Detail_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'penjualan_id' => 1,
    'barang_id' => 11,
    'harga' => 12000000,
    'jumlah' => 2,
],[
    'penjualan_id' => 2,
    'barang_id' => 14,
    'harga' => 22000000,
    'jumlah' => 1,
],[
    'penjualan_id' => 3,
    'barang_id' => 17,
    'harga' => 17000000,
    'jumlah' => 1,
],[
    'penjualan_id' => 4,
    'barang_id' => 20,
    'harga' => 22000000,
    'jumlah' => 1,
],[
    'penjualan_id' => 5,
    'barang_id' => 12,
    'harga' => 14000000,
    'jumlah' => 1,
],[
    'penjualan_id' => 6,
    'barang_id' => 16,
    'harga' => 11000000,
    'jumlah' => 3,
],[
    'penjualan_id' => 7,
    'barang_id' => 18,
    'harga' => 20000000,
    'jumlah' => 1,
],[
    'penjualan_id' => 8,
    'barang_id' => 12,
    'harga' => 14000000,
    'jumlah' => 1,
],[
    'penjualan_id' => 9,
    'barang_id' => 15,
    'harga' => 10000000,
    'jumlah' => 2,
],[
    'penjualan_id' => 10,
    'barang_id' => 19,
    'harga' => 27000000,
    'jumlah' => 1,
]];

DB::table('t_penjualan_detail')->insert($data);
    }
}
