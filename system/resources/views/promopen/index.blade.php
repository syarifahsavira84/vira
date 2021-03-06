
@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
			<div class="card-header">
					<strong>Filter</strong>
				</div>
				<div class="card-body">
					<form action="{{url('admin/promopen/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$nama ?? ""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Diskon</label>
							<input type="text" name="diskon" class="form-control" value="{{$diskon ?? ""}}">
						</div>
						<button class="btn btn-dark float-right btn-sm"><i class="fa fa-search"></i> Filter</button>
					</form>
				</div>
			</div>
			<br>
			<div class="card">
				<div class="card-header">
					<h4>Data Promo</h4>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th >No</th>
							<th >Nama Promo</th>
							<th >Harga</th>
							<th >Diskon</th>
							<th >Aksi</th>
						</thead>
						<tbody>
							@foreach($list_promo as $promo)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$promo->nama}}</td>
								<td>{{$promo->harga}}</td>
								<td>{{$promo->diskon}}</td>
								<td >
									
										<a href="{{url('admin/promopen', $promo->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
										<!-- <a href="{{url('admin/promo', $promo->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete',['url'=>url('admin/promo', $promo->id)]) -->
									
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