@inject('timeService','App\Services\TimeServices')
@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<div class="float-right">
						Jam : {{$timeService->showTimeNow()}}
					</div>
					<strong>Filter</strong>
				</div>
				<div class="card-body">
					<form action="{{url('produkpen/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$nama ?? ""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Stock</label>
							<input type="text" name="stock" class="form-control" value="{{$stock ?? ""}}">
						</div>
						<button class="btn btn-dark float-right btn-sm"><i class="fa fa-search"></i> Filter</button>
					</form>
				</div>
			</div>
			<br>
			<div class="card">
				<div class="card-header">
					<strong>Data Produk</strong>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th >No</th>
							<th >Nama Produk</th>
							<th>Harga</th>
							<th>Size</th>
							<th>Stock</th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->size}}</td>
								<td>{{$produk->stock}}</td>
								
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection