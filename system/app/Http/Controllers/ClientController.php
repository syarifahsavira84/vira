<?php

namespace App\Http\Controllers;


use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Promo;
use App\Models\Provinsi;

class ClientController extends Controller
{
    public function produkCollection()
    {
        $list_produk = Produk::all();

        
        $data['list'] = Produk::simplePaginate(4);
        return view('client.produk-collection',$data);

    }
    function filter(){
        $nama = request('nama');
        $size = explode(",", request('size'));
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        $data['nama'] = $nama;
        $data['size'] = request('size');
        return view('client.produk-collection', $data);
    }
    public function kategoriCollection()
    {
        $list_kategori = Kategori::all();

        
        $data['list'] = Kategori::simplePaginate(2);
        return view('client.kategori-collection',$data);

    }
    public function promoCollection()
    {
        $list_promo = Promo::all();

        
        $data['list'] = Promo::simplePaginate(2);
        return view('client.promo-collection',$data);

    }
    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('client.test-ajax', $data);
    }
}
