<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuachuathaytheController;
use App\Http\Controllers\NguoisudungController;
use App\Http\Controllers\ThietbiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class ,'index'])->name('home');
Route::get('/welcome',function(){
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Route::get('/home',[HomeController::class , 'index'])->name('home');

Route::get('/nguoi-dung', [NguoisudungController::class, 'listNguoidung'])->name('listNguoidung');

    Route::get('/them-nguoi-dung', [NguoisudungController::class, 'themNguoidung'])->name('themnguoidung');

    Route::post('/them-nguoi-dung', [NguoisudungController::class, 'store'])->name('postthemnguoidung');

    Route::get('/cap-nhat-nguoi-dung{id}', [NguoisudungController::class, 'capnhatnguoidung'])->name('capnhatnguoidung');

    Route::post('/cap-nhat-nguoi-dung{id}', [NguoisudungController::class, 'updatenguoidung']);

    Route::get('/delete-nguoi-dung/{id}', [NguoisudungController::class , 'deleteNguoisudung'])->name('delete-Nguoidung');

Route::get('/thiet-bi', [ThietbiController::class, 'listThietbi'])->name('listThietbi');

    Route::get('/them-thiet-bi', [ThietbiController::class, 'themThietbi'])->name('themThietbi');

    Route::post('/them-thiet-bi', [ThietbiController::class, 'store'])->name('postThietbi');

    Route::get('/delete-thiet-bi{id}' , [ThietbiController::class , 'deleteThietbi'])->name('delete-Thietbi');

    Route::get('/edit{id}' , [ThietbiController::class , 'capnhatthietbi'])->name('capnhatthietbi');

    Route::post('/edit{id}' , [ThietbiController::class , 'updatethietbi']);

Route::get('/thay-the-sua-chua', [SuachuathaytheController::class, 'listThaythesuachua'])->name('listThaythesuachua');

    Route::get('/them-thay-the-sua-chua', [SuachuathaytheController::class, 'themThaythesuachua'])->name('themThaythesuachua');

    Route::post('/them-thay-the-sua-chua', [SuachuathaytheController::class, 'store'])->name('postThaythesuachua');

    Route::get('/cap-nhat-thay-the-sua-chua{id}', [SuachuathaytheController::class, 'capnhatthaythesuachua'])->name('capnhatthaythesuachua');

    Route::post('/cap-nhat-thay-the-sua-chua{id}', [SuachuathaytheController::class, 'updatethaythesuachua']);

    Route::get('/delete-thay-the-sua-chua{id}' , [SuachuathaytheController::class , 'deleteThaythesuachua'])->name('delete-Thaythesuachua');


