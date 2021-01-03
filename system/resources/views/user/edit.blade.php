@extends('template.base')
@section('content')

@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger btn-sm" role="alert">
			{{$error}}
		</div>
	@endforeach
@endif
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3 ">
			<div class="card">
				<div class="card-header">
					Edit Data User
				</div>
				<div class="card-body">
						<form action="{{url('admin/user',$user->id)}}" method="POST">
							@csrf
							@method('put')
							<div class="form-group">
						        <label>Nama</label>
						        <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
						    </div>
						    <div class="form-group">
						        <label>Username</label>
						        <input type="text" class="form-control" name="username" value="{{$user->username}}">
						    </div>
						    <div class="form-group">
						        <label>Email</label>
						        <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly>
						    </div>
						    <div class="form-group">
						        <label>Password</label>
						        <input type="password" class="form-control" name="password">
						    </div>
						    <div class="form-group" >
							<label>No HP</label>
							<input type="text" class="form-control" name="no_handphone"></input>
						</div>
						    <div class="form-group">
						        <button class="btn btn-dark float-right btn-sm"><i class="fa fa-edit"></i> Update</button>
						    </div>
					   </form>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection
