@extends('template_client.content')

@section('isi')

<section class="content">
      <div class="container-fluid">
        <h5 class="mb-3"><b>Promo</b></h5>
        <div class="row">
        	<div class="col-md-3">
	        <div class="card">
	        	<div class="card-body">
						<form action="{{url('promo-collection/filter')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$nama ?? ""}}">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Diskon</label>
								<input type="text" name="stock" class="form-control" value="{{$size ?? ""}}">
							</div>
							<button class="btn btn-dark float-right btn-sm"><i class="fa fa-search"></i> Filter</button>
						</form>
					</div>
				</div>

	        </div>
        <!-- <div class="row"> -->
        	@foreach($list as $promo)
          
            <div class="col-md-3">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Nama : {{$promo->nama}}</h3>
                       <h3 class="card-title">Harga : Rp.{{number_format($promo->harga)}}</h3>
                        <h3 class="card-title">Diskon : {{$promo->diskon}} %</h3>

                      
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                   
                    <!-- /.card-body -->
                  <!-- </div> -->
                  <!-- /.card -->
                </div>

          </div>
           @endforeach
        
     
      </div><!-- /.container-fluid -->
      <button class="btn btn-dark float-right btn-sm">{{$list->links()}}</button>
    </section>

@endsection