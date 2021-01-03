
@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Pelanggan</h3>
				</div>
				<div class="card-body">
					<h3>{{$pelanggan->nama}}</h3>
					<hr>
					<p>
						Jenis Kelamin : {{$pelanggan->jenis_kelamin}} |
						Alamat : {{$pelanggan->alamat}} 
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

