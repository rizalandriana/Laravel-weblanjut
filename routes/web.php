<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
@@ -15,26 +13,6 @@
|
*/

Route::get('Home', function() {
    return "Hello My Name is rizal";
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/motor',function(){
    return "Hello World";
});
Route::get('/motor/{jenis?}',function($jenis=null){
    if($jenis == null ) return "Motor Dashboard Page"; 
    return "Motor dengan jenis ".$jenis;
});
Route::get('/motor/{jenis?}',function($jenis='Sport'){
    return "Motor dengan jenis ".$jenis; 
});
Route::get('book', [BookController::class, 'index']);
Route::get('vbook/{judul}', [BookController::class, 'view']);
Route::get('viewbook/{judul}', [BookController::class, 'viewJudul']);
//Route::get('vbook/{$judul}', [BookController::class, 'viewJudul']);

Route::resource('siswa', SiswaController::class); 
