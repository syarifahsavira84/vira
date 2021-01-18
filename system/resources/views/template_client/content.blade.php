<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Vr Wristwatch</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{url('public')}}/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('public')}}/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
@stack('style')

<body>

    <!-- Start Main Top -->
    
    @include('template_client.head')
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                 @include('template_client.widget')
                
                <!-- End Atribute Navigation -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>

        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    @yield('isi')

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    
    <!-- End Slider -->

    <!-- Start Categories  -->
   <!--  <div class="categories-shop">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </div> -->
    <!-- End Categories -->

    <!-- Start Products  -->
  
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            
           
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
   @include('template_client.footer')
    <!-- End Footer  -->

    <!-- Start copyright  -->
    
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{url('public')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{url('public')}}/js/popper.min.js"></script>
    <script src="{{url('public')}}/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="{{url('public')}}/js/jquery.superslides.min.js"></script>
    <script src="{{url('public')}}/js/bootstrap-select.js"></script>
    <script src="{{url('public')}}/js/inewsticker.js"></script>
    <script src="{{url('public')}}/js/bootsnav.js."></script>
    <script src="{{url('public')}}/js/images-loded.min.js"></script>
    <script src="{{url('public')}}/js/isotope.min.js"></script>
    <script src="{{url('public')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('public')}}/js/baguetteBox.min.js"></script>
    <script src="{{url('public')}}/js/form-validator.min.js"></script>
    <script src="{{url('public')}}/js/contact-form-script.js"></script>
    <script src="{{url('public')}}/js/custom.js"></script>
    @stack('script')
</body>

</html>