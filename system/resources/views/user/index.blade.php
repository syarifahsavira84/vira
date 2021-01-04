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
					<form action="{{url('admin/user/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$nama ?? ""}}">
						</div>
						<button class="btn btn-dark float-right btn-sm"><i class="fa fa-search"></i> Filter</button>
					</form>
				</div>
			</div>
			<br>
			<div class="card">
				<div class="card-header">
					Data User
					<a href="{{url('admin/user/create')}}" class="btn btn-dark float-right btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<tr>
								<th>No</th>
								<th>Username</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Email</th>
								<th>Produk</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{ $loop->iteration}}</td>
								<td>{{$user->username}}</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->jenis_kelamin_string}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->produk_count}}</td>
								<td>
									<div class="btn-group">
										<a href="{{url('admin/user', $user->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete',['url'=>url('admin/user', $user->id)])
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
