
@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Promo</h3>
				</div>
				<div class="card-body">
					<h3>{{$promo->nama}}</h3>
					<hr>
					<p>
						Rp.{{number_format($promo->harga)}} |
						Diskon : {{$promo->diskon}} %
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection