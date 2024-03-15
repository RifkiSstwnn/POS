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

        //  $user = UserModel::firstOrNew([
        //     'username' => 'manager33',
        //     'nama' => 'Manager tiga tiga',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        //     ]); 

        //   $user->save();

        // $user = UserModel::create([
        //     'username' => 'manager55',
        //     'nama' => 'Manager55',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        //   ]);
            
        //   $user->username = 'manager56';
          
        //   $user->isDirty(); // true
        //   $user->isDirty('username'); // true
        //   $user->isDirty('nama'); // false
        //   $user->isDirty(['nama', 'username']); // true
          
        //   $user->isClean(); // false
        //   $user->isClean('username'); // false
        //   $user->isClean('nama'); // true
        //   $user->isClean(['nama', 'username']); // false
        //   $user->save();
        //   $user->isDirty();
        //   $user->isClean();
        //   dd($user->isClean()); 


        // $user = UserModel::create([
        //   'username' => 'manager11',
        //   'nama' => 'Manager11',
        //   'password' => Hash::make('12345'),
        //   'level_id' => 2
        // ]);
        
        //   $user->username = 'manager12';

        //   $user->save();

        //   $user->wasChanged();
        //   $user->wasChanged('username');
        //   $user->wasChanged(['username', 'level_id']);
        //   $user->wasChanged('nama');
        //   dd($user->wasChanged(['nama', 'username']));

        // $user = UserModel::all();
        //  return view('user', ['data' => $user]);
        
        $user = UserModel::with('level')->get();
        // dd($user);
         return view('user', ['data' => $user]);
        
    }

    public function tambah(){
      return view('user_tambah');
    }

    public function tambah_simpan(Request $request) {
      UserModel::create([
          'username' => $request->username,
          'nama' => $request->nama,
          'password' => Hash::make($request->password),
          'level_id' => $request->level_id
      ]);

      return redirect('/user');
    }

    public function ubah($id) {
      $user = UserModel::find($id);
      return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request) {
      $user = UserModel::find($id);

      $user->username = $request->username;
      $user->nama = $request->nama;
      $user->password = Hash::make($request->password);
      $user->level_id = $request->level_id;

      $user->save();
      return redirect('/user');
  }
    public function hapus($id) {
      $user = UserModel::find($id);
      $user->delete();

      return redirect('/user');
   }

   

} 