<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap css  -->
    <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css')}}">

    <!-- Aos css &js cdn  -->
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css')}}">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js')}}">
    <!-- swiper.js css   -->
    <link rel="stylesheet"href="{{url('https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css')}}"/>

    <!-- lightbox css and js  -->
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js')}}">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css')}}">

    <!-- fontawesom cdn  -->
<link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css')}}">    
    <!-- bootstrap icon cdn  -->
    <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/swiper.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/product.css')}}">
    <title>Task</title>
</head>
<body>

<div id="preloader"></div>
<!-- end preloader  -->
<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 topbar2  d-flex justify-content-center mt-2">
           <h5>FREE DELIVERY </h5>
           <h5> on all orders</h5>
            </div>
            <div class="col-sm-6 mt-2 text-end d-flex justify-content-center">
                <h5><span> <i class="fa-solid fa-bolt-lightning"></i>  FLASH SALE:</span></h5>
                <h5>  60% OFF CAR BATTERIES | USE CODE "BATT60"</h5>
            </div>
            <div class="col-sm-3 topbar1">
                <ul class="nav justify-content-center ">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Help</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                      </li> 
                  </ul>
            </div>
        </div>
    </div>
</div>
<!-- navbar   nav1 -->
<section class="header">
    <div class="nav1" id="navbar">
      <nav class="navbar navbar-expand-lg ">
      <div class="container">
     <a class="navbar-brand" href="#">
     <img src="{{url('assets/images//asset 0.png')}}" class="img-fluid" alt="">
     </a>
{{-- <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
    aria-expanded="false" aria-label="Toggle navigation"></button> --}}
<div class="collapse navbar-collapse" id="collapsibleNavId">

          {{--  --}}
    <ul class="navbar-nav m-auto  mt-lg-0  navbar-middle">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mt-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                All categories
                {{-- <span><i class="fa-solid fa-chevron-up"></i></span> --}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search for Products" aria-label="Search">
              <button class="btn" type="submit">
                <span><i class="bi bi-search"></i></span>
              </button>
            </form>
    </ul>
    {{--  --}}
    <ul class="navbar-nav ms-auto mt-2 mt-lg-0 cartbar">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span>English</span>
            </a>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>USD</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                {{-- icons nav --}}
                <li class="nav-item dropdown icon-link">
                    <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span><i class="bi bi-person"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown icon-link">
                        <a class="nav-link  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="bi bi-heart"></i></span>  <bold class="w3-badge w3-green">6</bold>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                       
                     
                        <li class="nav-item dropdown icon-link">
                        <a class="nav-link  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="bi bi-cart"></i></span><bold class="w3-badge w3-green">6</bold>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
    </ul>
</div>
 </nav>
 </div>
</section>




{{-- start nav2 --}}
<div class="nav2 ">

    <nav class="navbar navbar-expand-md ">
        <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="col-sm-9 collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li><a class="nav-link" href="{{url('/')}}">Home</a></li>
              <li><a class="nav-link" href="{{url('/about')}}">About </a></li>
              <li><a class="nav-link" href="{{url('/blog')}}">Blog</a></li>
              <li><a class="nav-link" href="{{url('/product')}}">Products</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                service parts
                            </a>
                            <ul class="dropdown-menu">
                              <div class="row">
                                <div class="col-lg-3 dropdown px-4 dropd d-sm-blok d-block">
                                  <h5 class="fs-4">LUBRICANTS & FLUIDS</h5>
                                  <li><a class="dropdown-ite" href="#">Antifreeze & Coolant</a></li>
                                  <li><a class="dropdown-ite" href="#">Automatic Transmission Oil</a></li>
                                  <li><a class="dropdown-ite" href="#">Brak fluid</a></li>
                                  <li><a class="dropdown-ite" href="#">Antifreeze & Coolant</a></li>
                                  <li><a class="dropdown-ite" href="#">Automatic Transmission Oil</a></li>
                                  <li><a class="dropdown-ite" href="#">Brak fluid</a></li>
                                 
                                </div>
                                <div class="col-lg-3 dropdown  d-sm-blok d-block dropd px-4">
                                  <h5 class="fs-4"> TIMING BELTS & PARTS</h5>   
                                  <li><a class="dropdown-ite" href="#">Antifreeze & Coolant</a></li>
                                  <li><a class="dropdown-ite" href="#">Automatic Transmission Oil</a></li>
                                  <li><a class="dropdown-ite" href="#">Brak fluid</a></li>
                                  <li><a class="dropdown-ite" href="#">Antifreeze & Coolant</a></li>
                                  <li><a class="dropdown-ite" href="#">Automatic Transmission Oil</a></li>
                                  <li><a class="dropdown-ite" href="#">Brak fluid</a></li>   
                                </div>
                                <!--  -->
                                <div class="col-lg-6 dropdown  d-sm-blok d-block dropd px-4">
                                  <h5 class="fs-4"> FEATURED CATEGORIES</h5>
                                <div class="row">
                                  <div class="col-sm-6">
                                      <img src="{{url('assets/images/asset 11.jpeg')}}" class="img-fluid" alt="">
                                       <li><a href="">Wheels & Tires</a></li>
                                  </div>
                                  <div class="col-sm-6">
                                    <img src="{{url('assets/images/asset 12.jpeg')}}" class="img-fluid" alt="">
                                     <li><a href="">Wheels & Tires</a></li>
                                </div>
                               
                               
                                </div>
                                <!--  -->
                               </div>


                            </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    brake
                                </a>
                            
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        car batteries
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>tools & garage</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Action</a></li>
                                          <li><a class="dropdown-item" href="#">Another action</a></li>
                                          <li><hr class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                        </li>
                                        <li></li>
            </ul>          
          </div>
        </div>
        <div class="col-sm-3 nav-contact">
            <div class="row">
                <div class="col-sm-2 ">
                    <span><i class="fa-solid fa-headphones"></i></span>
                </div>
                <div class="col-sm-8 ">
                    <h6>Call us 24x7</h6>
                    <h3>+08 9229 8228</h3>
                </div>
            </div>
           
          </div>
    </nav>

</div>
<!-- end navbar  -->
