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
            ['kategori_id' => 111, 'kategori_kode' => 'KTG001', 'kategori_nama' => 'Smartphone'],
            ['kategori_id' => 112, 'kategori_kode' => 'KTG002', 'kategori_nama' => 'Laptop'],
            ['kategori_id' => 113, 'kategori_kode' => 'KTG003',  'kategori_nama'=> 'Tablet'],
            ['kategori_id' => 114, 'kategori_kode' => 'KTG004', 'kategori_nama' => 'TV'],
            ['kategori_id' => 115, 'kategori_kode' => 'KTG005',  'kategori_nama'=> 'Kamera']
        ];
        
        DB::table('m_category')->insert($data);
    }
}
