@inject('timeService','App\Services\TimeServices')
@extends('template_penjual.base')

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
					<form action="{{url('produk/filter')}}" method="post">
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
					<a href="{{url('produk/create')}}" class="btn btn-dark float-right btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th >No</th>
							<th >Nama Produk</th>
							<th>Harga</th>
							<th>Size</th>
							<th>Stock</th>
							<th  >Aksi</th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->size}}</td>
								<td>{{$produk->stock}}</td>
								<td >
									<div class="btn-group">
										<a href="{{url('produk', $produk->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('produk', $produk->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete',['url'=>url('produk', $produk->id)])
									</div>
								</td>
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