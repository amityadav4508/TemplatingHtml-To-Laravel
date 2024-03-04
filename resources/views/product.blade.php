@extends('layouts.main')
@section('main-container')
<section class="nav-about px-3 bg-gray">
  <div class="container-fluid px-5 py-3">
    <div class="row">
      <div class="col-sm d-flex product-nav" >
        <p><a href="{{url('/blog')}}">Home</a></p>
        <p><a href="{{url('/blog')}}">/Shop</a></p>
        <p><a href="{{url('/blog')}}">/Timing Belts & Parts</a></p>
        <p><a href="{{url('/blog')}}">/Timing Belt Kit</a></p>
        <p>/ Road and Track Suspension</p>
      </div>
    </div>
  </div>
</section>

{{-- start blogs  --}}
<section class="blog Product">
  <div class="container-fluid">
  <div class="row">
  <div class="col-sm text-center">
  {{-- <h2> Blog</h2> --}}
  </div>
  </div>
  <div class="row">
<div class="col-lg-6 col-md-6 d-sm-block d-block blog-left ">
<div class="row mb-5">
   <div class="product-search d-flex justify-content-between">
    <h5 class="red">-7%</h5>
    <button class=" btn" type="submit">
        <span><i class="bi bi-search"></i></span>
      </button>
   </div>
    <div class="small-container single-product">
        <div class="row row2">
            <div class="col Product-img">
                <img src="{{url('assets/images/product/asset 11.jpeg')}}"  id="ProductImg">
                <div class="small-img-row2 d-flex justify-content-around">
                    <div class="small-img-col st">
                        <img src="{{url('assets/images/product/asset 12.jpeg')}}"  id="ProductImg">
                    </div>
                    <div class="small-img-col">
                        <img src="{{url('assets/images/product/asset 13.jpeg')}}"  id="ProductImg">
                    </div>
                    <div class="small-img-col">
                        <img src="{{url('assets/images/product/asset 14.jpeg')}}"  id="ProductImg">
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
  </div>
  {{-- Product Right Side Section ------------------------------------------ --}}
  <div class="col-lg-6 col-md-6 d-sm-block d-block  mt-5   product-right">
    <div class="row mb-5">
        <div class="col-sm">     
          <div class="  px-2 blog-page-img-text">
           <div class=" d-flex">
            <h6 class="mt-3 mb-3 review-star">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star-half"></i></span>
                </h6>
                 <p class="mt-2 mx-3 ">Reviews (3)</p>
           </div>

          <h3>Road and Track Suspension</h3>
          <h3>$49.99  <span><strike>$53.75</strike></span></h3>   
          <p><span><i class="fa-solid fa-check"></i></span> In Stock </p> 
          <p>The small round table in the dinette may be great for casual 
            meals with your family, but inviting overnight guests.</p>
           
            <ul class="product-list"> 
                <li>Country: Usa</li>
                <li>Part Number: A123-3416</li>
                <li>Color: White/Sliver</li>
            </ul>
            <h5>Quantity</h5>
            <input type="number" placeholder="1">
          <div class="col-sm" id="btn4">
         <div class="row">
           <div class="col-sm-6 d-md-block mt-5 "><a class="btn4" href="">ADD TO CART</a></div>
           <div class="col-sm-6 d-md-block mt-5 "><a class="btn4 buy-now" href="">BUY NOW</a></div>
         </div>
          </div>
          {{--  --}}
          <div class=" d-flex gap-5 compare">
            <p><strong><i class="fa-regular fa-heart"></i></strong>
            <a href="">add to wishlist</a></p>
            <p><strong><i class="fa-solid fa-code-compare"></i></strong>
                <a href="">add to wishlist</a></p>
          </div>
          <hr>
          <div class="brands ">
            <p><strong class="fs-4">BRANDS:</strong><a href="">Auto Part Plus</a> </p>
            <p><strong class="fs-4">SKU:</strong>  SF348 </p>
            <p><strong class="fs-4">SHARE:</strong>
            <strong><i class="fa-brands fa-facebook-f"></i></strong>
            <strong><i class="fa-brands fa-instagram"></i></strong>
            <strong><i class="fa-brands fa-linkedin-in"></i></strong>
            </p>
          </div>
          </div>
        </div>
      </div>
      </div>
     </div>
  </div>
  </section>
  
  <section class="togethor">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h2>Frequently Bought Together  </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 d-block togethor-img">
                <img src="{{url('assets/images/product/asset 15.jpeg')}}" class="img-fluid" alt="">
                <span><i class="fa-solid fa-plus"></i></span>
           <div class="text-center">
            <p>This Product: Road and Track  Suspension</p>
            <p><strong>$49.99</strong> <strike>$53.75</strike></p>
           </div>
            </div>
         {{--  --}}
         <div class="col-lg-3 col-md-4 col-sm-6 d-block togethor-img">
            <img src="{{url('assets/images/product/asset 18.jpeg')}}" class="img-fluid" alt="">
            <span><i class="fa-solid fa-plus"></i></span>
       <div class="text-center">
        <p>This Product: Road and Track  Suspension</p>
        <p><strong>$49.99</strong> <strike>$53.75</strike></p>
       </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 d-block togethor-img">
            <img src="{{url('assets/images/product/asset 19.jpeg')}}" class="img-fluid" alt="">
            {{-- <span><i class="fa-solid fa-plus"></i></span> --}}
       <div class="text-center">
        <p>This Product: Road and Track  Suspension</p>
        <p><strong>$49.99</strong> <strike>$53.75</strike></p>
       </div>
        </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-block together-text ">
               
                <div class=" child">
                    <p>Price fof All:</p>
                    <p><strong>$49.99</strong></p>
                    <div class="col-sm mt-5" id="btn4">
                        <div class="row">
                          <div class="col-sm-6"><a class="btn4" href="">ADD TO CART</a></div>
                        </div>
                         </div>
                </div>


            </div>
        </div>
    </div>
  </section>


  <section class="description">
  <div class="container-fluid">
   <div class="container-fluid">
    <div class="row">
        <div class="col-sm">


            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-descrition-tab" data-bs-toggle="pill" data-bs-target="#pills-descrition" type="button" role="tab" aria-controls="pills-descrition" aria-selected="true">
                    <h5>DESCRIPTION</h5>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-information-tab" data-bs-toggle="pill" data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information" aria-selected="false">
                    <h5>ADDITIONL INFORMATION</h5></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-returns-tab" data-bs-toggle="pill" data-bs-target="#pills-returns" type="button" role="tab" aria-controls="pills-returns" aria-selected="false">
                    <h5>DELIVERY & RETURN</h5></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">
                    <h5>REVIEWS</h5></button>
                </li>
              </ul>

              {{-- tab1 --}}
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-descrition" role="tabpanel" aria-labelledby="pills-descrition-tab" tabindex="0">.
             <P>This model is offered in sizes 17 to 20 inches with widths ranging from 8 to 11 inches. Each wheel has an approximate weight of 17.19lbs to 22.94lbs. Has two finish options: Dark Metallic Graphite and Gloss Bronze. The Ampliform is offered in 4 and 5 lug bolt patterns.
             </P>
             <div class="row mt-5">
                <div class="col-sm-6 justify-content-between">
                    <ul>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>
                        <li>Brand: Anovia</li>

                    </ul>
                </div>
             </div>

                </div>
             <div class="tab-pane fade" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab" tabindex="0">.</div>
                <div class="tab-pane fade" id="pills-returns" role="tabpanel" aria-labelledby="pills-returns-tab" tabindex="0">..3.</div>
                <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab" tabindex="0">.4.</div>
              </div>

        </div>
    </div>
   </div>
  </div>
  </section>


<section class="related-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm mt-5 mb-5">
                <h2>Related products </h2>
                
            </div>
        </div>
 
        <div class="row">
        <div class="col">
          
            <div class="swiper myProducts">
                <div class="swiper-wrapper">
                  <div class="swiper-slide  thecard">
                    <div class="card">
                        <img src="{{url('assets/images/product/asset 27.jpeg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body text-start ">
                        <p><a href="">Spectre Performance SPE-9055 </a></p>
                        <h6 class="mt-3 mb-3">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star-half"></i></span>
                        </h6>
                        <h4><span>$106.58  - $202.87 </span></h4>
                        {{--  --}}
                        <div class="card-share d-flex flex-column gap-3">
                        <span><i class="bi bi-search"></i></span>
                        <span><i class="bi bi-heart"></i></span>
                        <span><i class="bi bi-arrow-repeat"></i></span>
                        </div>
                        {{--  --}}
                        <div class="cardhover col-sm mt-5 col-sm text-center">
                        <a href="#" class="popular-btn ">add to cart</a>
                        </div>
                        {{--  --}}
                        </div>
                        </div>

                  </div>
                  {{--  --}}
                  <div class="swiper-slide">
                    <div class="card thecard">
                        <img src="{{url('assets/images/product/asset 17.jpeg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body text-start ">
                        <p><a href="">Spectre Performance SPE-9055 </a></p>
                        <h6 class="mt-3 mb-3">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star-half"></i></span>
                        </h6>
                        <h4><span>$106.58  - $202.87 </span></h4>
                        {{--  --}}
                        <div class="card-share d-flex flex-column gap-3">
                        <span><i class="bi bi-search"></i></span>
                        <span><i class="bi bi-heart"></i></span>
                        <span><i class="bi bi-arrow-repeat"></i></span>
                        </div>
                        {{--  --}}
                        <div class="cardhover col-sm mt-5 col-sm text-center">
                        <a href="#" class="popular-btn ">add to cart</a>
                        </div>
                        {{--  --}}
                        </div>
                        </div>

                  </div>
                  <div class="swiper-slide">
                    <div class="card thecard">
                        <img src="{{url('assets/images/product/asset 21.jpeg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body text-start ">
                        <p><a href="">Spectre Performance SPE-9055 </a></p>
                        <h6 class="mt-3 mb-3">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star-half"></i></span>
                        </h6>
                        <h4><span>$106.58  - $202.87 </span></h4>
                        {{--  --}}
                        <div class="card-share d-flex flex-column gap-3">
                        <span><i class="bi bi-search"></i></span>
                        <span><i class="bi bi-heart"></i></span>
                        <span><i class="bi bi-arrow-repeat"></i></span>
                        </div>
                        {{--  --}}
                        <div class="cardhover col-sm mt-5 col-sm text-center">
                        <a href="#" class="popular-btn ">add to cart</a>
                        </div>
                        {{--  --}}
                        </div>
                        </div>

                  </div>
                  <div class="swiper-slide">
                    <div class="card thecard">
                        <img src="{{url('assets/images/product/asset 28.jpeg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body text-start ">
                        <p><a href="">Spectre Performance SPE-9055 </a></p>
                        <h6 class="mt-3 mb-3">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star-half"></i></span>
                        </h6>
                        <h4><span>$106.58  - $202.87 </span></h4>
                        {{--  --}}
                        <div class="card-share d-flex flex-column gap-3">
                        <span><i class="bi bi-search"></i></span>
                        <span><i class="bi bi-heart"></i></span>
                        <span><i class="bi bi-arrow-repeat"></i></span>
                        </div>
                        {{--  --}}
                        <div class="cardhover col-sm mt-5 col-sm text-center">
                        <a href="#" class="popular-btn ">add to cart</a>
                        </div>
                        {{--  --}}
                        </div>
                        </div>

                  </div>
                  <div class="swiper-slide">
                    <div class="card thecard">
                        <img src="{{url('assets/images/product/asset 24.jpeg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body text-start ">
                        <p><a href="">Spectre Performance SPE-9055 </a></p>
                        <h6 class="mt-3 mb-3">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star-half"></i></span>
                        </h6>
                        <h4><span>$106.58  - $202.87 </span></h4>
                        {{--  --}}
                        <div class="card-share d-flex flex-column gap-3">
                        <span><i class="bi bi-search"></i></span>
                        <span><i class="bi bi-heart"></i></span>
                        <span><i class="bi bi-arrow-repeat"></i></span>
                        </div>
                        {{--  --}}
                        <div class="cardhover col-sm mt-5 col-sm text-center">
                        <a href="#" class="popular-btn ">add to cart</a>
                        </div>
                        {{--  --}}
                        </div>
                        </div>

                  </div>
                  <div class="swiper-slide">
                    <div class="card thecard">
                        <img src="{{url('assets/images/product/asset 23.jpeg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body text-start ">
                        <p><a href="">Spectre Performance SPE-9055 </a></p>
                        <h6 class="mt-3 mb-3">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star-half"></i></span>
                        </h6>
                        <h4><span>$106.58  - $202.87 </span></h4>
                        {{--  --}}
                        <div class="card-share d-flex flex-column gap-3">
                        <span><i class="bi bi-search"></i></span>
                        <span><i class="bi bi-heart"></i></span>
                        <span><i class="bi bi-arrow-repeat"></i></span>
                        </div>
                        {{--  --}}
                        <div class="cardhover col-sm mt-5 col-sm text-center">
                        <a href="#" class="popular-btn ">add to cart</a>
                        </div>
                        {{--  --}}
                        </div>
                        </div>

                  </div>
                  <div class="swiper-slide">
                    <div class="card thecard">
                        <img src="{{url('assets/images/product/asset 25.jpeg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body text-start ">
                        <p><a href="">Spectre Performance SPE-9055 </a></p>
                        <h6 class="mt-3 mb-3">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star-half"></i></span>
                        </h6>
                        <h4><span>$106.58  - $202.87 </span></h4>
                        {{--  --}}
                        <div class="card-share d-flex flex-column gap-3">
                        <span><i class="bi bi-search"></i></span>
                        <span><i class="bi bi-heart"></i></span>
                        <span><i class="bi bi-arrow-repeat"></i></span>
                        </div>
                        {{--  --}}
                        <div class="cardhover col-sm mt-5 col-sm text-center">
                        <a href="#" class="popular-btn ">add to cart</a>
                        </div>
                        {{--  --}}
                        </div>
                        </div>

                  </div>
                 
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
             
              </div>



        </div>
        </div>

    </div>
</section>





@endsection