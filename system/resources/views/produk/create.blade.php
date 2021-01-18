@extends('template_penjual.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<h4>Tambah Data Produk</h4>
				</div>
				<div class="card-body">
					<form action="{{url('produk')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama"></input>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group" >
									<label for="" class="control-label">Foto</label>
									<input type="file" class="form-control" name="foto" accept=".png"></input>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" >
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga"></input>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" >
									<label for="" class="control-label">Berat</label>
									<input type="text" class="form-control" name="berat"></input>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Size</label>
									<input type="text" class="form-control" name="size"></input>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Stock</label>
									<input type="text" class="form-control" name="stock"></input>
								</div>
							</div>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" id="deskripsi" class="form-control">
								
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

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@push('script')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
		  $('#deskripsi').summernote();
		});
	</script>	
@endpush