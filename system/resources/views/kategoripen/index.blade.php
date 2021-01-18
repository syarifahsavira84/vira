
@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
		<div class="card">
			
			<br>
			<div class="card">
				<div class="card-header">
					<h4>Data Kategori</h4>
					
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th >No</th>
							<th >Nama Kategori</th>
							<th >Brand</th>
							<th >Stock</th>
							<th >Aksi</th>
						</thead>
						<tbody>
							@foreach($list_kategori as $kategori)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$kategori->nama}}</td>
								<td>{{$kategori->brand}}</td>
								<td>{{$kategori->stock}}</td>
								<td >
										<a href="{{url('admin/kategoripen', $kategori->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
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