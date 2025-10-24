<?php

use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Route;


route::get('/',[produkController::class,'call_nama']);

Route::get('/HOME', function () {
    return view('home'); 
})->name('home');

Route::get('/parameter/{id}', function($id): void {
    echo "INI HALAMAN DENGAN PARAMETER " .$id;
});

route::get('/test-link', function() {
    echo "<a href=".route('home')."'>INI LINK UNTUK HOME</a>'";
});

route::get('/index-produk',[produkController::class,'index']);


Route::get('/cv', function () {
    return view('pages.cv');
});