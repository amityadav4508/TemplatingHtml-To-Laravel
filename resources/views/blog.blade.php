@extends('layouts.main')
@section('main-container')
<section class="nav-about px-3 bg-gray">
  <div class="container-fluid px-5 py-3">
    <div class="row">
      <div class="col-sm d-flex">
        <p><a href="{{url('/blog')}}">Blog</a></p>
        <p>/ Blog   Page</p>
      </div>
    </div>
  </div>
</section>

{{-- start blogs  --}}
<section class="blog">
  <div class="container-fluid">
  <div class="row">
  <div class="col-sm text-center">
  <h2> Blog</h2>
  </div>
  </div>
  <div class="row">
  <div class="col-lg-8 col-md-8 d-sm-block d-block blog-left ">
<div class="row mb-5">
  <div class="col-sm">
    <img src="{{url('assets/images/blog/asset 11.jpeg')}}" class="img-fluid" class="" alt="">
    <div class="col-sm-3 text-center date">
    <h5 class="">MAR 22, 2021</h5>
    </div>       
    <div class="blog-img-text px-5 blog-page-img-text">
    <h6><span>by</span> <a href="">admin</a> <span>in</span> <a href="">exhaust, wheels $ tires</a></h6>
    <h3><a href="">How to Check and Maintain Your Suspension</a></h3>    
  <p>The small round table in the dinette may be great for casual meals
     with your family, but inviting overnight guests course down with winter.</p>  
    <div class="" id="btn4">
    <a class="btn4" href="">READ MORE</a>
    </div>
    </div>
  </div>
</div>
{{-- row 2 --}}
<div class="row mt-5 mb-5">
  <div class="col-sm">
    <img src="{{url('assets/images/blog/asset 12.jpeg')}}" class="img-fluid" class="" alt="">
    <div class="col-sm-3 text-center date">
    <h5 class="">MAR 22, 2021</h5>
    </div>       
    <div class="blog-img-text px-5 blog-page-img-text">
    <h6><span>by</span> <a href="">admin</a> <span>in</span> <a href="">exhaust, wheels $ tires</a></h6>
    <h3><a href="">What Is Car Suspension?</a></h3>    
  <p>The small round table in the dinette may be great for casual meals
     with your family, but inviting overnight guests course down with winter.</p>  
    <div class="" id="btn4">
    <a class="btn4" href="">READ MORE</a>
    </div>
    </div>
  </div>
</div>
{{-- 3 --}}
<div class="row mt-5">
  <div class="col-sm">
    <img src="{{url('assets/images/blog/asset 13.jpeg')}}" class="img-fluid" class="" alt="">
    <div class="col-sm-3 text-center date">
    <h5 class="">MAR 22, 2021</h5>
    </div>       
    <div class="blog-img-text px-5 blog-page-img-text">
    <h6><span>by</span> <a href="">admin</a> <span>in</span> <a href="">exhaust, wheels $ tires</a></h6>
    <h3><a href="">How to Check and Maintain Your Suspension</a></h3>    
  <p>The small round table in the dinette may be great for casual meals
     with your family, but inviting overnight guests course down with winter.</p>  
    <div class="" id="btn4">
    <a class="btn4" href="">READ MORE</a>
    </div>
    </div>
  </div>
</div>
{{--  --}}
  </div>
  {{-- Blog Right Side Section ------------------------------------------ --}}
  <div class="col-lg-4 col-md-4 d-sm-block d-block px-5 blog-right">
     <div class="row blog-right-search bottom-margin ">
      <div class="col-sm  ">
        <form class="d-flex input w-100" role="search">
          <input class="form-control w-100" type="search" placeholder="Search for Products" aria-label="Search">
          <button class="btn search-btn" type="submit">
            <span><i class="bi bi-search"></i></span>
          </button>
        </form>
      </div>
     </div>
     
     <div class="row blog-pagep mt-5">
      <div class="col-sm">
       <div class="row">
        <h3>Category</h3>
       </div>
       {{--  --}}
       <div class="row">
        <p><a href="">Auto Parts  ........................................................................(1)</a></p>
        <p><a href="">Braking  ..............................................................................(2)</a></p>
        <p><a href="">Exhaust  ..............................................................................(3)</a></p>
        <p><a href="">Headlight  .........................................................................(4)<a></p>
        <p><a href="">Interiors  ............................................................................(5)</a></p>
        <p><a href="">Mirror  ................................................................................(6)</a></p>
        <p><a href="">Wheels & Tires  ...............................................................(7)</a></p>
      </div>
      </div>
     </div>

       
     <div class="row blog-pagep mt-5">
      <div class="col-sm">
       <div class="row">
        <h3>Popular Posts</h3>
       </div>
       {{--  --}}
       <div class="row mt-5">
        <div class="col-sm-4 mt-5">
          <img src="{{url('assets/images/blog/asset 14.jpeg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-sm-8 mt-2">
          <h6><span>jan 22, 2021</span> <span>by</span> <a href="">admin</a> </h6>
          <h3><a href="">How to Check and Maintain Your Suspension</a></h3>
        </div>
       </div>
       {{--  --}}
       <div class="row mt-5">
        <div class="col-sm-4 mt-5">
          <img src="{{url('assets/images/blog/asset 15.jpeg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-sm-8 mt-2">
          <h6><span>jan 22, 2021</span> <span>by</span> <a href="">admin</a> </h6>
          <h3><a href="">How to Check and Maintain Your Suspension</a></h3>
        </div>
       </div>
       <div class="row mt-5">
        <div class="col-sm-4 mt-5">
          <img src="{{url('assets/images/blog/asset 16.jpeg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-sm-8 mt-2">
          <h6><span>jan 22, 2021</span> <span>by</span> <a href="">admin</a> </h6>
          <h3><a href="">How to Check and Maintain Your Suspension</a></h3>
        </div>
       </div>
       <div class="row mt-5">
        <div class="col-sm-4 mt-5">
          <img src="{{url('assets/images/blog/asset 17.jpeg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-sm-8 mt-2">
          <h6><span>jan 22, 2021</span> <span>by</span> <a href="">admin</a> </h6>
          <h3><a href="">How to Check and Maintain Your Suspension</a></h3>
        </div>
       </div>
      </div>
     </div>

     <div class="row blog-pagep mt-5">
       <div class="row">
        <h3>Tags Post</h3>
       </div>
       {{--  --}}
       <div class="row tag-post  ">
        <div class="col-lg d-md-block">
          <p><span > <a href="">Break</a></span>
            <span > <a href="">Bumper Cover</a></span>
            <span > <a href="">Break</a></span>
          </p>  
        </div>
      </div>
      <div class="row tag-post  ">
        <p><span > <a href="">Control Arm Kit</a></span>
          <span > <a href="">Fule Pump</a></span>
         
        </p>  
      </div>
      <div class="row tag-post  ">
        <p><span > <a href="">Headlight</a></span>
          <span > <a href="">Radiotor</a></span>
          <span > <a href="">Tool</a></span>
        </p>  
      </div>
      <div class="row tag-post  ">
        <p><span > <a href="">Whell Hub</a></span>
          
        </p>  
      </div>
     
     

  </div>
  </section>
@endsection