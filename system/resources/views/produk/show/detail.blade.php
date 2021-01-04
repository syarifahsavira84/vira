<p>
	{{$produk->harga_string}} |
	Stock : {{$produk->stock}} |
	Berat : {{$produk->berat}} kg |
	Size : {{$produk->size}} |
	Seller : {{$produk->seller->username}} |
	Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</p>