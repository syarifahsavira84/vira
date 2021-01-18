<?php 


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukpenController extends Controller{
	function index(){
		// $id_user = request()->user()->id;
		$user = request()->user();
		// $data['list_produk'] = Produk::where('id_user', $id_user)->get();
		$data['list_produk'] = $user->produk;
		return view('produkpen.index', $data);
	}
	// function create(){
	// 	return view('produk.create');
	// }
	// function store(){
	// 	$produk = new Produk;
	// 	$produk->id_user = request()->user()->id;
	// 	$produk->nama = request('nama');
	// 	$produk->harga = request('harga');
	// 	$produk->berat = request('berat');
	// 	$produk->size = request('size');
	// 	$produk->stock = request('stock');
	// 	$produk->deskripsi = request('deskripsi');
	// 	$produk->save();

	// 	$produk->handleUploadFoto();

	// 	return redirect('produk')->with('success', 'Data berhasil ditambah');
	// }
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produkpen.show', $data);
	}
	// function edit(Produk $produk){
	// 	$data['produk'] = $produk;
	// 	return view('produkpen.edit', $data);
	// }
	// function update(Produk $produk){
	// 	$produk->nama = request('nama');
	// 	$produk->harga = request('harga');
	// 	$produk->berat = request('berat');
	// 	$produk->size = request('size');
	// 	$produk->stock = request('stock');
	// 	$produk->deskripsi = request('deskripsi');
	// 	$produk->save();

	// 	$produk->handleUploadFoto();
	// 	return redirect('produk')->with('success', 'Data berhasil diedit');
	// }
	// function destroy(Produk $produk){
	// 	$produk->handleDelete();
	// 	$produk->delete();

	// 	return redirect('produk')->with('danger', 'Data berhasil dihapus');
	// }
	function filter(){
		$nama = request('nama');
		$stock = explode(",", request('stock'));
		$size = explode(",", request('size'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		// $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		// $data['list_produk'] = Produk::whereIn('stock', $stock)->get();
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
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['stock'] = request('stock');
		$data['size'] = request('size');
		return view('produkpen.index', $data);
	}
}