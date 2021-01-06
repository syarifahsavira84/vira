@extends('template_client.content')

@section('isi')

<section class="content">
      <div class="container-fluid">
        <h5 class="mb-3"><b>Produk</b></h5>
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
								<label for="" class="control-label">Size</label>
								<input type="text" name="stock" class="form-control" value="{{$size ?? ""}}">
							</div>
							<button class="btn btn-dark float-right btn-sm"><i class="fa fa-search"></i> Filter</button>
						</form>
					</div>
				</div>

	        </div>
        <!-- <div class="row"> -->
        	@foreach($list as $produk)
          <div class="col-md-4 col-sm-3 col-6">
            <div class="info-box">
              <span class="info-box-icon bg-info"><img src="{{url("public/$produk->foto")}}" alt=""></span>

              <div class="info-box-content">
                <span class="info-box-text">{{$produk->nama}}</span>
                <span class="info-box-number">Harga : {{$produk->harga_string}}</span>
                <span class="info-box-text">Size : {{$produk->size}}</span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          @endforeach
          
          
        </div>
        <button class="btn btn-dark btn-sm">{{$list->links()}}</button>
     
      </div><!-- /.container-fluid -->
    </section>

    <div class="container">
  <div class="row">
    <div class="col-md-12 mt-3">
      <div class="card">
        <div class="card-header">
          <h3>Detail Data Produk</h3>
        </div>
        <div class="card-body">
          @foreach($list as $produk)

          <div class="row">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <img src="{{url("public/$produk->foto")}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card">
                <div class="card-body">
                 <!--  <div  class="card card-warning"> -->
                  <h3>{{$produk->nama}}</h3>
                <hr>
                @include('produk.show.detail')
                <p>
                  {!! nl2br($produk->deskripsi) !!}
                </p>
                <!-- </div> -->
                  
                </div>
              </div>
                
                
              </div>

               @endforeach
            </div>
          <br>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection