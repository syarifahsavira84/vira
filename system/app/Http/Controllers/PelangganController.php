<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller{
	function index(){
		$data['list_pelanggan'] = Pelanggan::all();
		return view('pelanggan.index', $data);
	}
	function create(){
		return view('pelanggan.create');
	}
	function store(){
		$pelanggan = new Pelanggan;
		$pelanggan->nama = request('nama');
		$pelanggan->jenis_kelamin = request('jenis_kelamin');
		$pelanggan->alamat = request('alamat');
		$pelanggan->save();

		return redirect('admin/pelanggan')->with('success', 'Data berhasil ditambah');
	}
	function show(Pelanggan $pelanggan){
		$data['pelanggan'] = $pelanggan;
		return view('pelanggan.show', $data);
	}
	function edit(Pelanggan $pelanggan){
		$data['pelanggan'] = $pelanggan;
		return view('pelanggan.edit', $data);
	}
	function update(Pelanggan $pelanggan){
		$pelanggan->nama = request('nama');
		$pelanggan->jenis_kelamin = request('jenis_kelamin');
		$pelanggan->alamat = request('alamat');
		$pelanggan->save();

		return redirect('admin/pelanggan')->with('success', 'Data berhasil diedit');
	}
	function destroy(Pelanggan $pelanggan){
		$pelanggan->delete();

		return redirect('admin/pelanggan')->with('danger', 'Data berhasil dihapus');
	}
	function filter(){
		$nama = request('nama');
		$data['list_pelanggan'] = Pelanggan::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('pelanggan.index', $data);
		
	}
}