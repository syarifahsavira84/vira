@extends('template_client.content')
@section('isi')
<!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Cart</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Wishlist  -->
    <div class="wishlist-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Product</th>
                                    <th>Unit Price</th>
                                    <th>Stock</th>
                                    <th>Add Item</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list as $produk)
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="{{url("public/$produk->foto")}}" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									{{$produk->nama}}
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>{{$produk->harga_string}}</p>
                                    </td>
                                    <td class="quantity-box">{{$produk->stock}}</td>
                                    <td class="add-pr">
                                        <a class="btn hvr-hover" href="#">Add to Cart</a>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                </tr>
                                 @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist -->
@endsection