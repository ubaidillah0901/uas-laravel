<?php

use App\Http\Controllers\halamancontroller;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\SiswaController as ControllersSiswaController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/siswa', function () {
//    return "<h1>saya siswa</h1>";
//});
//Route::get('/siswa/{id}', function ($id) {
//    return "<h1>saya siswa dengan id $id</h1>";
//})->where('id','[0-9]+');

//Route::get('/siswa/{id}/{nama}', function ($id,$nama) {
//    return "<h1>saya siswa dengan id $id & nama $nama</h1>";
//})->where(['id'=>'[0-9]+','nama'=>'[a-za-z]+']);

//route::get('siswa',[siswacontroller::class, 'index']);
//route::get('siswa/{id}',[siswacontroller::class, 'detail'])->where('id','[0-9]+');


route::get('/',[halamancontroller::class, 'index']);
route::get('/kontak',[halamancontroller::class, 'kontak']);
route::get('/tentang',[halamancontroller::class, 'tentang']);

route::resource('siswa',SiswaController::class)->middleware('isLogin');

Route::get('/sesi',[SessionController::class,'index'])->middleware('isTamu');
Route::post('/sesi/login',[SessionController::class,'login'])->middleware('isTamu');
Route::get('/sesi/logout',[SessionController::class,'logout']);
Route::get('/sesi/register',[SessionController::class,'register'])->middleware('isTamu');
Route::post('/sesi/create',[SessionController::class,'create'])->middleware('isTamu');

route::get('/', function(){
    return view('sesi/welcome');
})->middleware('isTamu');

