<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanoController extends Controller
{
    public function index() {
      return view('penjualan');
    }
}
