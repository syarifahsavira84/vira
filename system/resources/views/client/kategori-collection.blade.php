@extends('template_client.content')

@section('isi')

<section class="content">
	<div class="container-fluid">
		<h5 class="mb-3"><b>Kategori</b></h5>
			<div class="row">
        		<div class="col-md-3">
			        <div class="card">
			        	<div class="card-body">
								<form action="{{url('produk-collection/filter')}}" method="post">
									@csrf
									<div class="form-group">
										<label for="" class="control-label">Nama</label>
										<input type="text" name="nama" class="form-control" value="{{$nama ?? ""}}">
									</div>
									<div class="form-group">
										<label for="" class="control-label">Brand</label>
										<input type="text" name="stock" class="form-control" value="{{$size ?? ""}}">
									</div>
									<button class="btn btn-dark float-right btn-sm"><i class="fa fa-search"></i> Filter</button>
								</form>
							</div>
						</div>
					</div>
					@foreach($list as $kategori)
					<div class="col-md-3">
			            <div class="card card-success">
			              <div class="card-header">
			                <h3 class="card-title">{{$kategori->nama}}</h3>

			                
			                <!-- /.card-tools -->
			              </div>
			              <!-- /.card-header -->
			              <div class="card-body">
			              	
			              		<li> Brand : {{$kategori->brand}}</li>
			              		<li> Stock Produk : {{$kategori->stock}}</li>
			              	
			              </div>
			              <!-- /.card-body -->
			            <!-- </div> -->
			            <!-- /.card -->
			          </div>
					</div>
					@endforeach

				</div>

</section>
	

@endsection