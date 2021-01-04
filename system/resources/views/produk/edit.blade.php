
@extends('template.base')

@section('content')
<div class="container">
	<div class="row mt-3">
		<div class="col-md-3">
			<div class="card">
				<div class="card-body">
					<img src="{{url("public/$produk->foto")}}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
		<div class="col-md-9>
			<div class="card">
				<div class="card-header">
					<h4>Edit Data Produk</h4>
				</div>
				<div class="card-body">
					<form action="{{url('admin/produk',$produk->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method("PUT")
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$produk->nama}}"></input>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Foto</label>
									<input type="file" class="form-control" name="foto" accept=".png"></input>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga" value="{{$produk->harga}}"></input>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group" >
									<label for="" class="control-label">Berat</label>
									<input type="text" class="form-control" name="berat" value="{{$produk->berat}}"></input>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" >
									<label for="" class="control-label">Size</label>
									<input type="text" class="form-control" name="size" value="{{$produk->size}}"></input>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" >
									<label for="" class="control-label">Stock</label>
									<input type="text" class="form-control" name="stock" value="{{$produk->stock}}"></input>
								</div>
							</div>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control">
								{{$produk->deskripsi}}
							</textarea>
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