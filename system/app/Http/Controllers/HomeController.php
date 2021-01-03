<?php  


namespace App\Http\Controllers;

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
}