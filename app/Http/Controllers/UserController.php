<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
      // $user=UserModel::all();
      // return view('user',['data'=>$user]);

      // tambah data user dengan Eloquent Model
        // $data = [
        //   'username' => 'Manager 3',
        //   'nama' => 'Manager_tiga',
        //   'password' => Hash::make('12345'),
        //   'level_id' => 2
        // ];
        // UserModel::create($data); // tambahkan data ke tabel m_user

        // coba akses model UserModel
        // $user = UserModel::firstWhere('level_id',1); // ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

        //tambah data user dengan Eloquent Model
        // $data = [
        //    'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data); //update data
        
        // //coba akses model UserModel
        // $user = UserModel::all(); //ambil semua data dari tabel m_user
        // return view('user', ['data' =>$user]);

        // $user = UserModel::findOr(20,['username', 'nama'], function (){
        //   abort(404);
        // });
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOrFail(465);
        // return view('user', ['data' => $user]);

        //  $user= UserModel::where('username', 'Manager9')->firstOrFail();
        //  return view('user', ['data' => $user]);
        
        // $user=UserModel::where('level_id',2)->count();
        // // dd($user);
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstOrCreate(
        //   [
        //     'username'=>'manager',
        //     'nama'=>'manager',
        //   ],
        // );

        //  $user = UserModel::firstOrCreate([
        //     'username' => 'manager22',
        //     'nama' => 'Manager Dua Dua',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        //     ]); 

         $user = UserModel::firstOrNew([
            'username' => 'manager33',
            'nama' => 'Manager tiga tiga',
            'password' => Hash::make('12345'),
            'level_id' => 2,
            ]); 

          $user->save();
        return view('user',['data'=>$user]);
    }
}