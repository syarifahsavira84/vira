<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SettingController;

use App\Http\Controllers\KategoripenController;
use App\Http\Controllers\PromopenController;
use App\Http\Controllers\ProdukpenController;

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
// Route::get('home', function () {
//     return view('home');
// });
Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);

Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

Route::prefix('admin')->middleware('auth')->group(function(){
	
	Route::post('kategori/filter', [KategoripenController::class, 'filter']);	
	
	Route::resource('kategoripen', KategoripenController::class);
	Route::resource('promopen', PromopenController::class);
	Route::resource('user', UserController::class);
});
Route::post('produkpen/filter', [ProdukpenController::class, 'filter']);
Route::resource('produkpen', ProdukpenController::class);

Route::prefix('admin')->middleware('auth')->group(function(){
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	Route::post('kategori/filter', [KategoriController::class, 'filter']);
	
	Route::resource('product', ProductController::class);
	Route::resource('kategori', KategoriController::class);
	Route::resource('pelanggan', PelangganController::class);
	Route::resource('pemasok', PemasokController::class);
	Route::resource('promo', PromoController::class);
	Route::resource('user', UserController::class);
});

Route::resource('produk', ProdukController::class);

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('test-collection', [HomeController::class, 'testCollection']);
Route::get('test-ajax', [HomeController::class, 'testAjax']);
Route::get('alamat', [HomeController::class, 'testAlamat']);


Route::get('produk-collection', [ClientController::class, 'produkCollection']);
Route::get('promo-collection', [ClientController::class, 'promoCollection']);
Route::post('produk-collection/filter', [ClientController::class, 'filter']);
Route::get('kategori-collection', [ClientController::class, 'kategoriCollection']);
Route::get('cart-collection', [ClientController::class, 'cartCollection']);
Route::get('cekout-collection', [ClientController::class, 'cekoutCollection']);
Route::get('addcart-collection', [ClientController::class, 'addcartCollection']);
Route::get('product-collection', [ClientController::class, 'productCollection']);
Route::get('about-collection', [ClientController::class, 'aboutCollection']);
Route::get('home', [ClientController::class, 'homeCollection']);