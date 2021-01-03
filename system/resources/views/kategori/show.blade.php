
@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Kategori</h3>
				</div>
				<div class="card-body">
					<h3>{{$kategori->nama}}</h3>
					<hr>
					<p>
						Brand : {{$kategori->brand}} |
						Stock : {{$kategori->stock}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection