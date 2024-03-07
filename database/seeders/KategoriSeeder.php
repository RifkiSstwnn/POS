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
            ['kategori_id' => 111, 'kategori_kode' => 'SDG', 'kategori_nama' => 'Pokok'],
            ['kategori_id' => 112, 'kategori_kode' => 'PGN', 'kategori_nama' => 'Minuman'],
            ['kategori_id' => 113, 'kategori_kode' => 'PPN',  'kategori_nama'=> 'Makanan Ringan'],
            ['kategori_id' => 114, 'kategori_kode' => 'LLN', 'kategori_nama' => 'Sabun'],
            ['kategori_id' => 115, 'kategori_kode' => 'POI',  'kategori_nama'=> 'Sampo']
        ];
        
        DB::table('m_category')->insert($data);
    }
}
