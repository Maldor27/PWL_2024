<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo","Lisa Permata"];
//     return view('polinema.mahasiswa',['mahasiswa' => $arrMahasiswa]);
// }); 

Route::get('/', function () {

    return view('welcome');
});
// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo","Lisa Permata"];
//     return view('politeknik negeri malang',['mahasiswa' => $arrMahasiswa]);
// }); 