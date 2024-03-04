@extends('layouts.main')
@section('main-container')
<section class="nav-about px-3 bg-gray">
  <div class="container-fluid px-5 py-3">
    <div class="row">
      <div class="col-sm d-flex">
        <p><a href="{{url('/')}}">Home</a></p>
        <p> / About Page</p>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm text-center section-padding pbold">
        <p>OUR STROE</p>
        <h2>About Our Store</h2>
        <P>Integer dignissim sagittis quam. Maecenas sem eros, rutrum vitae risus eget, vulputate aliquam nisi. Donec elementum ex gravida neque
           tempus, sed maximus lacus rhoncus. Aenean laoreet rhoncus nibh non aliquam.</P>
      </div>
    </div>
    <div class="row">
    <div class="col img-radius ms-5">
      <img src="{{url('assets/images/about/asset 11.jpeg')}}" class="img-fluid" alt="">
    </div>
    </div>
  </div>
</section>


{{-- how we work  --}}
<div class="section we-work section-padding section-margin">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-sm">
        <p>PROCESS</p>
        <h2>How We Works        </h2>
      </div>
    </div>
     <div class="row section-margin ">
      <div class="col-lg-6 col-md-6 d-sm-block d-block mb-4 mt-5   ">
        <div class="col-sm card  border-radius">
          <div class="row">
            <div class="col-sm-2 col-md-3   work-card2 mt-5">
              <img src="{{url('assets/images/about/asset 12.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-10 col-md-9 d-sm-block work-card2 py-5 px-x">
            <h5>Design</h5>
            <p>Mauris at bibendum ligula, at bibendum nibh curabitur id risus dapibus.</p>
            </div>
          </div>
        </div>
      </div>
      {{--  --}}
      <div class="col-lg-6 col-md-6 d-sm-block d-block mb-4 mt-5   ">
        <div class="col-sm card  border-radius">
          <div class="row">
            <div class="col-sm-2 col-md-3   work-card2 mt-5">
              <img src="{{url('assets/images/about/asset 13.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-10 col-md-9 d-sm-block work-card2 py-5 px-x">
            <h5>Development</h5>
            <p>Mauris at bibendum ligula, at bibendum nibh curabitur id risus dapibus.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 d-sm-block d-block mb-4 mt-5   ">
        <div class="col-sm card  border-radius">
          <div class="row">
            <div class="col-sm-2 col-md-3   work-card2 mt-5">
              <img src="{{url('assets/images/about/asset 14.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-10 col-md-9 d-sm-block work-card2 py-5 px-x">
            <h5>Manufacturing </h5>
            <p>Mauris at bibendum ligula, at bibendum nibh curabitur id risus dapibus.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 d-sm-block d-block mb-4 mt-5   ">
        <div class="col-sm card  border-radius">
          <div class="row">
            <div class="col-sm-2 col-md-3   work-card2 mt-5">
              <img src="{{url('assets/images/about/asset 15.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-10 col-md-9 d-sm-block work-card2 py-5 px-x">
            <h5>Marketing and selling</h5>
            <p>Mauris at bibendum ligula, at bibendum nibh curabitur id risus dapibus.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="qoute-about">
 <div class="container-fluid">
  <div class="row bg-gray padding-all ">
    <div class="col-sm span-icon d-flex gap-5  ">
      <span class=""><i class="fa-solid fa-quote-left"></i></span>
      <p class=""><i>If you’re looking for a collection of auto car from a large number of auto manufacturers, you’ve landed on the right place.
      </i></p>
    </div>
  </div>
 </div>
</section>



<section class="team  section-padding">
  <div class="container-fluid">
    <div class="row text-center section-margin  ">
      <div class="col-sm">
        <p>THE TEAM        </p>
        <h2>Meet Our Team</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <div class="swiper myTeam">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card">
                <img src="{{url('assets/images/about/asset 16.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body py-5">
                  <h3 class="card-title mb-3">Robert</h3>
                    <p>CUSTOMER SERVICES</p>
                    <div class="social-media justify-content-center mt-4">
                      <h4>
                        <span><i class="fa-brands fa-facebook-f"></i></span>
                        <span><i class="fa-brands fa-twitter"></i></span>
                        <span><i class="fa-brands fa-square-pinterest"></i></span>
                        <span><i class="fa-brands fa-linkedin-in"></i></span>
                      </h4>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card">
                <img src="{{url('assets/images/about/asset 17.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body py-5">
                  <h3 class="card-title mb-3">Merry</h3>
                    <p>DESIGNER</p>
                    <div class="social-media justify-content-center mt-4">
                      <h4>
                        <span><i class="fa-brands fa-facebook-f"></i></span>
                        <span><i class="fa-brands fa-twitter"></i></span>
                        <span><i class="fa-brands fa-square-pinterest"></i></span>
                        <span><i class="fa-brands fa-linkedin-in"></i></span>
                      </h4>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card">
                <img src="{{url('assets/images/about/asset 18.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body py-5">
                  <h3 class="card-title mb-3">Jhone Hoosan</h3>
                    <p>CEO & FOUNDER</p>
                    <div class="social-media justify-content-center mt-4">
                      <h4>
                        <span><i class="fa-brands fa-facebook-f"></i></span>
                        <span><i class="fa-brands fa-twitter"></i></span>
                        <span><i class="fa-brands fa-square-pinterest"></i></span>
                        <span><i class="fa-brands fa-linkedin-in"></i></span>
                      </h4>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card">
                <img src="{{url('assets/images/about/asset 19.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body py-5">
                  <h3 class="card-title mb-3">Melisa</h3>
                    <p>
                      DESIGNER
                    </p>
                    <div class="social-media justify-content-center mt-4">
                      <h4>
                        <span><i class="fa-brands fa-facebook-f"></i></span>
                        <span><i class="fa-brands fa-twitter"></i></span>
                        <span><i class="fa-brands fa-square-pinterest"></i></span>
                        <span><i class="fa-brands fa-linkedin-in"></i></span>
                      </h4>
                    </div>
                </div>
              </div>
            </div>
          
          
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="client-say section-margin bg-gray section-padding">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-sm text-center pbold">
        <h2>What Our Clients Say</h2>
        <p>Join our 15,910 + happy customers who 
          are consistently satisfied by <br> beautifully responsive and powerfully functional.</p>
      </div>
    </div>
    <div class="row section-margin">
      <div class="col">
        <div class="swiper myClient">
          <div class="swiper-wrapper">
          
            <div class="swiper-slide">
              <div class="card py-5 px-2 border-radius">
                <div class="card-body ">
                  <p>Lorem ipsum dolor sit, amet consectetur 
                    adipisicing elit. Dolore a, ea alias odit
                     atque voluptates nam dicta  dicta</p>
                     <div class="row justify-content-center  mt-4 ">
                      <div class="col-sm-2  user">
                        {{-- <span><i class="fa-solid fa-user" ></i></span> --}}
                        <img src="{{url('assets/images/about/asset 20.jpeg')}}" class="img-fluid" alt="">
                          </div>
                      <div class="col-sm-5 ">
                        <h3>JOHAN DOE</h3>
                        <h6 class=" mb-3">
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star-half"></i></span>
                          </h6>
                      </div>
                     </div>
                </div>
              </div>
            </div>
          
            <div class="swiper-slide">
              <div class="card py-5 px-2 border-radius">
                <div class="card-body ">
                  <p>Lorem ipsum dolor sit, amet consectetur 
                    adipisicing elit. Dolore a, ea alias odit
                     atque voluptates nam dicta  dicta</p>
                     <div class="row justify-content-center  mt-4 ">
                      <div class="col-sm-2  user">
                        {{-- <span><i class="fa-solid fa-user" ></i></span> --}}
                        <img src="{{url('assets/images/about/asset 20.jpeg')}}" class="img-fluid" alt="">
                          </div>
                      <div class="col-sm-5 ">
                        <h3>JOHAN DOE</h3>
                        <h6 class=" mb-3">
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star-half"></i></span>
                          </h6>
                      </div>
                     </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card py-5 px-2 border-radius">
                <div class="card-body ">
                  <p>Lorem ipsum dolor sit, amet consectetur 
                    adipisicing elit. Dolore a, ea alias odit
                     atque voluptates nam dicta  dicta</p>
                     <div class="row justify-content-center  mt-4 ">
                      <div class="col-sm-2  user">
                        {{-- <span><i class="fa-solid fa-user" ></i></span> --}}
                        <img src="{{url('assets/images/about/asset 20.jpeg')}}" class="img-fluid" alt="">
                          </div>
                      <div class="col-sm-5 ">
                        <h3>JOHAN DOE</h3>
                        <h6 class=" mb-3">
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star-half"></i></span>
                          </h6>
                      </div>
                     </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card py-5 px-2 border-radius">
                <div class="card-body ">
                  <p>Lorem ipsum dolor sit, amet consectetur 
                    adipisicing elit. Dolore a, ea alias odit
                     atque voluptates nam dicta  dicta</p>
                     <div class="row justify-content-center  mt-4 ">
                      <div class="col-sm-2  user">
                        {{-- <span><i class="fa-solid fa-user" ></i></span> --}}
                        <img src="{{url('assets/images/about/asset 20.jpeg')}}" class="img-fluid" alt="">
                          </div>
                      <div class="col-sm-5 ">
                        <h3>JOHAN DOE</h3>
                        <h6 class=" mb-3">
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star-half"></i></span>
                          </h6>
                      </div>
                     </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card py-5 px-2 border-radius">
                <div class="card-body ">
                  <p>Lorem ipsum dolor sit, amet consectetur 
                    adipisicing elit. Dolore a, ea alias odit
                     atque voluptates nam dicta  dicta</p>
                     <div class="row justify-content-center  mt-4 ">
                      <div class="col-sm-2  user">
                        {{-- <span><i class="fa-solid fa-user" ></i></span> --}}
                        <img src="{{url('assets/images/about/asset 20.jpeg')}}" class="img-fluid" alt="">
                          </div>
                      <div class="col-sm-5 text-start">
                        <h3>JOHAN DOE</h3>
                        <h6 class=" mb-3">
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star-half"></i></span>
                          </h6>
                      </div>
                     </div>
                </div>
              </div>
            </div>
        
           
           
          
          </div>
         <div class="page">
                    <div class="swiper-pagination"></div>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="our-client">
 <div class="container-fluid">
  <div class="row text-center justify-content-center">
    <div class="col-sm pbold section-margin">
      <h2>Our Clients      </h2>
      <p>Our area of practice is quite wide: design, development, manufacturing, marketing, and selling of.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 21.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 22.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 23.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 24.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 25.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 26.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 27.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 28.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 29.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 30.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 31.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 card py-2">
      <img src="{{url('assets/images/about/asset 22.jpeg')}}" class="img-fluid" alt="">
    </div>
  </div>
 </div>
</section>
@endsection