<?php  


namespace App\Http\Controllers;
use App\Models\Produk;

class HomeController extends Controller {

	function showBeranda(){
		return view('beranda');
	}
	function showProduk(){
		return view('produk');
	}
	function showKategori(){
		return view('kategori');
	}
	function showPromo(){
		return view('promo');
	}
	function showPelanggan(){
		return view('pelanggan');
	}
	function showPemasok(){
		return view('pemasok');
	}
	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if($produk=='payung'){
			echo "Tampilkan Produk Payung";
		}elseif($produk=='sepeda'){
			echo "Produk Sepeda";
		}
		echo "<br>";
		echo "Harga Min adalah $hargaMin <br>";
		echo "Harga Max adalah $hargaMax <br>";
	}
	public function testCollection()
	{
		$list_bike = ['Honda','Yamaha','Kawaasaki','Suzuki','Vespa','BMW','KTM'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		// Sorting
		// Sort By harga terendah
		// dd($list_produk->sortBy('harga'));
		// Sort By harga tertinggi
		// dd($list_produk->sortByDesc('harga'));
		// $data['list'] = $list_produk;
		// return view('test-collection',$data);

		// filter
		// $filtered = $list_produk->filter(function($item){
		// 	return $item->harga < 100000;
		// });

		// dd($filtered);

		// $sum = $list_produk->min('stock');
		// dd($sum);
		
		$data['list'] = Produk::simplePaginate(2);
		return view('test-collection',$data);

		
		dd($list_bike, $list_produk);
	}
}