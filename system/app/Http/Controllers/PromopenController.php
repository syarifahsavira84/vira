<?php 


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Promo;

class PromopenController extends Controller{
	function index(){
		$data['list_promo'] = Promo::all();
		return view('promopen.index', $data);
	}
	// function create(){
	// 	return view('promo.create');
	// }
	// function store(){
	// 	$promo = new Promo;
	// 	$promo->nama = request('nama');
	// 	$promo->harga = request('harga');
	// 	$promo->diskon = request('diskon');
	// 	$promo->save();

	// 	return redirect('admin/promo')->with('success', 'Data berhasil ditambah');
	// }
	function show(Promo $promo){
		$data['promo'] = $promo;
		return view('promopen.show', $data);
	}
	// function edit(Promo $promo){
	// 	$data['promo'] = $promo;
	// 	return view('promo.edit', $data);
	// }
	// function update(Promo $promo){
	// 	$promo->nama = request('nama');
	// 	$promo->harga = request('harga');
	// 	$promo->diskon = request('diskon');
	// 	$promo->save();

	// 	return redirect('admin/promo')->with('success', 'Data berhasil diedit');
	// }
	// function destroy(Promo $promo){
	// 	$promo->delete();

	// 	return redirect('admin/promo')->with('danger', 'Data berhasil dihapus');
	// }
	function filter(){
		$nama = request('nama');
		$diskon = explode(",", request('diskon'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		// $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		$data['list_promo'] = Promo::whereIn('diskon', $diskon)->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		// $data['list_produk'] = Produk::where('stock', '<>', $stock)->get();
		// $data['list_produk'] = Produk::whereNotIn('stock', $stock)->get();
		// $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		// $data['list_produk'] = Produk::whereNull('stock')->get();
		// $data['list_produk'] = Produk::whereNotNull('stock')->get();
		// $data['list_produk'] = Produk::whereDate('created_at', '2020-11-11')->get();
		// $data['list_produk'] = Produk::whereYear('created_at', '2020')->get();
		// $data['list_produk'] = Produk::whereMonth('created_at', '11')->get();
		// $data['list_produk'] = Produk::whereMonth('created_at', '11')->whereYear('created_at', '2019')->get();
		// $data['list_produk'] = Produk::whereTime('created_at', '03:30:22')->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stock', [10])->whereYear('created_at', '2020')->get();
		$data['list_promo'] = Promo::where('nama', 'like', "%$nama%")->whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['diskon'] = request('diskon');
		return view('promopen.index', $data);
		// $nama = request('nama');
		// $data['list_promo'] = Promo::where('nama', 'like', "%$nama%")->get();
		// $data['nama'] = $nama;
		// return view('promo.index', $data);
	}
}