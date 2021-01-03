<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\UserController;

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/profil2', function () {
    return view('profil2');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);
Route::prefix('admin')->middleware('auth')->group(function(){
  Route::post('promo/filter', [PromoController::class, 'filter']);
  Route::post('produk/filter', [ProdukController::class, 'filter']);
  Route::post('kategori/filter', [KategoriController::class, 'filter']);
  Route::post('pelanggan/filter', [PelangganController::class, 'filter']);
  Route::post('pemasok/filter', [PemasokController::class, 'filter']);
  Route::post('user/filter', [UserController::class, 'filter']);
  Route::resource('produk', ProdukController::class);
  Route::resource('kategori', KategoriController::class);
  Route::resource('promo', PromoController::class);
  Route::resource('pelanggan', PelangganController::class);
  Route::resource('pemasok', PemasokController::class);
  Route::resource('user', UserController::class);
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

// Route::prefix('admin')->middleware('auth')->group(function(){
// 	Route::resource('siswa', SiswaController::class);
// 	Route::resource('kriteria_ipa', kriteria_ipaController::class);
// 	Route::resource('kriteria_mtk', kriteria_mtkController::class);
// 	Route::resource('user', UserController::class);
// });
// Route::resource('kriteria_mtk', KriteriaMtkController::class);

// Route::resource('subkriteria_ipa', subkriteria_ipaController::class);


// Route::resource('subkriteria_mtk', subkriteria_mtkController::class);


// Route::get('/kepsek',[KepsekController::class, 'index']);

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/index', function () {
//     return view('kepsek.index');
// });
// Route::get('/show', function () {
//     return view('kepsek.show');
// });

// Route::get('/kriteria/list',[kriteriaController::class,'listKriteria']);
// Route::get('/kriteria/form/{id}',[kriteriaController::class,'form']);
// Route::post('/kriteria/form/{id}',[kriteriaController::class,'simpanForm']);


// Route::get('/login',[AuthController::class, 'showLogin'])->name('login');
// Route::post('/login',[AuthController::class, 'loginProcess']);
// Route::get('/logout',[AuthController::class, 'logout']);

// Route::get('/login2',[Auth2Controller::class, 'showLogin'])->name('login2');
// Route::post('/login2',[Auth2Controller::class, 'processLogin']);
// Route::get('/logout2',[Auth2Controller::class, 'logout2']);



  // Route::group(['prefix' => 'admin'], function(){
  //       Route::group(["as" => "siswai.", "prefix" => "siswai"], function () {
  //           Route::get('/',[siswaiController::class, 'index'])->name('index');
  //           Route::get('/data', [siswaiController::class, 'data'])->name('data');
  //           Route::post('/add', [siswaiController::class,'add'])->name('add');
  //           Route::post('/edit', [siswaiController::class,'edit'])->name('edit');
  //           Route::post('/delete', [siswaiController::class,'delete'])->name('delete');
  //       });