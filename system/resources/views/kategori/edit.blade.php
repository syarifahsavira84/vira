
@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<h4>Edit Data Kategori</h4>
				</div>
				<hr>
				<div class="card-body">
					<form action="{{url('admin/kategori',$kategori->id)}}" method="post">
						@csrf
						@method("PUT")
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$kategori->nama}}"></input>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Brand</label>
									<input type="text" class="form-control" name="brand" value="{{$kategori->brand}}"></input>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Stock</label>
									<input type="text" class="form-control" name="stock" value="{{$kategori->stock}}"></input>
								</div>
							</div>
						</div>
						<div class="form-group">
					        <button class="btn btn-dark float-right btn-sm"><i class="fa fa-save"></i> Simpan</button>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection