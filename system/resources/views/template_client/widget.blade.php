<div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="{{url('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('about-collection')}}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('product-collection')}}">Product</a></li>
                        
                        
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('cart-collection')}}">Cart</a></li>
                                <li><a href="{{url('cekout-collection')}}">Checkout</a></li>
                                <li><a href="{{url('addcart-collection')}}">Add Cart</a></li>

                            </ul>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{url('test-ajax')}}" class="nav-link">Alamat</a>
                        </li>
                    </ul>
                </div>


                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="logout"><a href="{{url('logout')}}"><i class="fas fa-sign-out-alt"></i></a></li>
                    </ul>
                </div>

                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>