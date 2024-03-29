<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable){
            return $dataTable->render('kategori.index');
    }
    public function create(){
        return view('kategori.create');
    }
    public function store(Request $request){
        KategoriModel::create(
            [
                'kategori_kode' => $request->kodeKategori,
                'kategori_nama' => $request->namaKategori,
            ]
        );
        return redirect('/kategori');
    }
    public function edit($id){
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $kategori]);
    }
    
    public function update(Request $request, $id){
        $kategori = KategoriModel::find($id);
        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;
        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id){
        $kategori = KategoriModel::find($id);
        $kategori->delete();
        return redirect('/kategori');
    }

        // $data = [
            //      'kategori_kode' => 'SNK',
            //      'kategori_nama' => 'Snack/Makanan Ringan',
            //      'created_at' => now()
            //  ];
            
            //  DB::table('m_category')->insert($data);
            //  return 'insert data baru berhasil';
            
            //  $row =DB::table('m_category')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
            //  return 'Update data berhasil. Jumlah data yang diupdate: ' .$row.' baris';
            
            //  $row =DB::table('m_category')->where('kategori_kode', 'SNK')->delete();
            //  return 'Delete data berhasil. Jumlah data yang dihapus: ' .$row.' baris';
            
        //  $data =DB::table('m_category')->get();
        //  return view('kategori', ['data' => $data]);
        
    }
     
 

