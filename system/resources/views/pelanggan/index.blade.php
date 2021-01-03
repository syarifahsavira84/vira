
@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
			<div class="card-header">
					<strong>Filter</strong>
				</div>
				<dir class="card-body">
					<form action="{{url('admin/pelanggan/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$nama ?? ""}}">
						</div>
						<button class="btn btn-dark float-right btn-sm"><i class="fa fa-search"></i> Filter</button>
					</form>
				</dir>
			</div>
			<br>
			<div class="card">
				<div class="card-header">
					<h4>Data Pelanggan</h4>
					<a href="{{url('admin/pelanggan/create')}}" class="btn btn-dark float-right btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th >No</th>
							<th >Nama Pelanggan</th>
							<th >Jenis Kelamin</th>
							<th >Alamat</th>
							<th >Aksi</th>
						</thead>
						<tbody>
							@foreach($list_pelanggan as $pelanggan)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$pelanggan->nama}}</td>
								<td>{{$pelanggan->jenis_kelamin}}</td>
								<td>{{$pelanggan->alamat}}</td>
								<td >
									<div class="btn-group">
										<a href="{{url('admin/pelanggan', $pelanggan->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/pelanggan', $pelanggan->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete',['url'=>url('admin/pelanggan', $pelanggan->id)])
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