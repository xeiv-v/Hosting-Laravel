<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index(){
        return 'INI HALAMAN YANG DIAKSES DENGAN CONTROLLER';
    }

    public function call_nama (){
        $nama = "Evi";
        return view('pages/home', compact('nama'));
    }
}
