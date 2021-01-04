@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Produk</h3>
				</div>
				<div class="card-body">
					<h3>{{$produk->nama}}</h3>
					<hr>
					<p>
						{{$produk->harga_string}} |
						Stock : {{$produk->stock}} |
						Berat : {{$produk->berat}} kg |
						Size : {{$produk->size}} |
						Seller : {{$produk->seller->username}} |
						Tanggal Produk : {{$produk->created_at->diffForHumans()}}
					</p>
					<p>
						{!! nl2br($produk->deskripsi) !!}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection