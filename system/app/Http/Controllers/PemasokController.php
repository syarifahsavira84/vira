<?php 


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pemasok;

class PemasokController extends Controller{
	function index(){
		$data['list_pemasok'] = Pemasok::all();
		return view('pemasok.index', $data);
	}
	function create(){
		return view('pemasok.create');
	}
	function store(){
		$pemasok = new Pemasok;
		$pemasok->nama = request('nama');
		$pemasok->jenis_kelamin = request('jenis_kelamin');
		$pemasok->alamat = request('alamat');
		$pemasok->save();

		return redirect('admin/pemasok')->with('success', 'Data berhasil ditambah');
	}
	function show(Pemasok $pemasok){
		$data['pemasok'] = $pemasok;
		return view('pemasok.show', $data);
	}
	function edit(Pemasok $pemasok){
		$data['pemasok'] = $pemasok;
		return view('pemasok.edit', $data);
	}
	function update(Pemasok $pemasok){
		$pemasok->nama = request('nama');
		$pemasok->jenis_kelamin = request('jenis_kelamin');
		$pemasok->alamat = request('alamat');
		$pemasok->save();

		return redirect('admin/pemasok')->with('success', 'Data berhasil diedit');
	}
	function destroy(Pemasok $pemasok){
		$pemasok->delete();

		return redirect('admin/pemasok')->with('danger', 'Data berhasil dihapus');
	}
	function filter(){
		$nama = request('nama');
		$data['list_pemasok'] = Pemasok::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('pemasok.index', $data);		
	}
}