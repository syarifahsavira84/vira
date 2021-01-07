<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukResource extends Controller
{
    
    public function index()
    {
        return Produk::all();
    }

    public function store()
    {
        if(request('nama') && request('berat') && request('harga') && request('stock') && request('size') && request('deskripsi')){

            $produk = new Produk;
            $produk->nama = request('nama');
            $produk->berat = request('berat');
            $produk->harga = request('harga');
            $produk->stock = request('stock');
            $produk->size = request('size');
            $produk->deskripsi = request('deskripsi');
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);
        }else{
            return collect([
                'respond' => 500,
                'message' => "Field ada yang kosong"
            ]);
        }
    }

    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk){
            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ditemukan"
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        if($produk){
            $produk->nama = request('nama') ?? $produk->nama;
            $produk->berat = request('berat') ?? $produk->berat;
            $produk->harga = request('harga') ?? $produk->harga;
            $produk->stock = request('stock') ?? $produk->stock;
            $produk->size = request('size') ?? $produk->size;
            $produk->deskripsi = request('deskripsi') ?? $produk->deskripsi;
            $produk->save();

            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ditemukan"
        ]);
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        if($produk){
            $produk->delete();
            return collect([
                'status' => 200,
                'data' => 'Produk berhasil dihapus'
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ditemukan"
        ]);
    }
}
