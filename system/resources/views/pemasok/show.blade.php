
@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Pemasok</h3>
				</div>
				<div class="card-body">
					<h3>{{$pemasok->nama}}</h3>
					<hr>
					<p>
						Jenis Kelamin : {{$pemasok->jenis_kelamin}} |
						Alamat : {{$pemasok->alamat}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection