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
                'barang_kode' => 'admin',
                'barang_nama' => 'Administrator',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'manager',
                'barang_nama' => 'Manager',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'staff',
                'barang_nama' => 'Staff/Kasir',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'admin',
                'barang_nama' => 'Administrator',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'manager',
                'barang_nama' => 'Manager',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'staff',
                'barang_nama' => 'Staff/Kasir',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'admin',
                'barang_nama' => 'Administrator',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'manager',
                'barang_nama' => 'Manager',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'staff',
                'barang_nama' => 'Staff/Kasir',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'staff',
                'barang_nama' => 'Staff/Kasir',
                'harga_beli' => 2000,
                'harga_jual' => 2000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
