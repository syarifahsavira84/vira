<?php 


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Http\Requests\KategoriStoreRequest;

class KategoriController extends Controller{
	function index(){
		$data['list_kategori'] = Kategori::all();
		return view('kategori.index', $data);
	}
	function create(){
		return view('kategori.create');
	}
	function store(KategoriStoreRequest $request){
		$kategori = new Kategori;
		$kategori->nama = request('nama');
		$kategori->brand = request('brand');
		$kategori->stock = request('stock');
		$kategori->save();

		return redirect('admin/kategori')->with('success', 'Data berhasil ditambah');
	}
	function show(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.show', $data);
	}
	function edit(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.edit', $data);
	}
	function update(Kategori $kategori){
		$kategori->nama = request('nama');
		$kategori->brand = request('brand');
		$kategori->stock = request('stock');
		$kategori->save();

		return redirect('admin/kategori')->with('success', 'Data berhasil diedit');
	}
	function destroy(Kategori $kategori){
		$kategori->delete();

		return redirect('admin/kategori')->with('danger', 'Data berhasil dihapus');
	}
	function filter(){
		$nama = request('nama');
		$data['list_kategori'] = Kategori::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('kategori.index', $data);	
	}
}