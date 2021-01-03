
@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<h4>Tambah Data Pelanggan</h4>
				</div>
				<div class="card-body">
					<form action="{{url('admin/pelanggan')}}" method="post">
						@csrf
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama"></input>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="jenis_kelamin">Jenis Kelamin</label>
									<select name="jenis_kelamin" class="form-control">
										<option value="">--Pilih Jenis Kelamin--</option>
									  <option value="laki-laki">Laki-laki</option>
									  <option value="perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Alamat</label>
									<input type="text" class="form-control" name="alamat"></input>
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