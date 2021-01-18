@extends('template_penjual.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Produk</h3>
				</div>
				<div class="card-body">

					<div class="row">
						<div class="col-md-3">
							<div class="card">
								<div class="card-body">
									<img src="{{url("public/$produk->foto")}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
							<div class="col-md-8">
								<h3>{{$produk->nama}}</h3>
								<hr>
								@include('produk.show.detail')
								<p>
									{!! nl2br($produk->deskripsi) !!}
								</p>
							</div>
						</div>
					<br>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection