@extends('template_client.content')
@section('isi')

    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Vr Wristwatch</strong></h1>
                            <p class="m-b-40">Disini tersedia berbagai jenis jam tangan yang menarik untuk pria dan wanita. Dengan kualitas yang tidak di ragukan lagi, harga masih terjangkau untuk masyarakat awam.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Vr Wristwatch</strong></h1>
                            <p class="m-b-40">Disini tersedia berbagai jenis jam tangan yang menarik untuk pria dan wanita. Dengan kualitas yang tidak di ragukan lagi, harga masih terjangkau untuk masyarakat awam.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Vr Wristwatch</strong></h1>
                            <p class="m-b-40">Disini tersedia berbagai jenis jam tangan yang menarik untuk pria dan wanita. Dengan kualitas yang tidak di ragukan lagi, harga masih terjangkau untuk masyarakat awam.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <br><br>

	<div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Data Product</h1>
                        <p>Product yang tersedia di Vr Wristwatch ada beberapa product.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($list as $produk)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{url("public/$produk->foto")}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>{{$produk->nama}}</h3>
                                <p>{!! nl2br($produk->deskripsi) !!}</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-6 col-lg-4 col-xl-4">
                    
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    
                </div>
            </div>
@endsection