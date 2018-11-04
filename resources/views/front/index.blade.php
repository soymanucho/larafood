@extends('layouts.frontapp')

@section('title')
  {{ config('app.name', 'LaraFood') }}
@endsection

@section('content')
  <section class="banner-area">
    <div class="container">
      <div class="row fullscreen align-items-center justify-content-between">
        <div class="col-lg-12 banner-content">
          <h6 class="text-white">La calidad de la materia prima, marca la diferencia</h6>
          <h1 class="text-white">LaraFood best CRM in town.</h1>
          <p class="text-white">
            La mejor herramienta para controlar tus pedidos.
          </p>
          <a href="#" class="primary-btn text-uppercase">Ver menú</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Start home-about Area -->
  <section class="home-about-area section-gap">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 home-about-left">
          <h1>Sobre nuestra historia</h1>
          <p>
            Who are in extremely love with eco friendly system. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <a href="#" class="primary-btn">Mirá el menú completo</a>
        </div>
        <div class="col-lg-6 home-about-right">
          <img class="img-fluid" src="img/about-img.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End home-about Area -->

  <!-- Start menu-area Area -->

        <!-- End menu-area Area -->

  <!-- Start reservation Area -->
  <section class="reservation-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 reservation-left">
          <h1 class="text-white">Reserve Your Seats
          to Confirm if You Come
          with Your Family</h1>
          <p class="text-white pt-20">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
          </p>
        </div>
        <div class="col-lg-5 reservation-right">
          <form class="form-wrap text-center" action="#">
            <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
            <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
            <input type="text" class="form-control" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" >
            <input type="text" class="form-control date-picker" name="date" placeholder="Select Date & time" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Date & time'" >
            <div class="form-select" id="service-select">
              <select>
                <option data-display="">Select Event</option>
                <option value="1">Event One</option>
                <option value="2">Event Two</option>
                <option value="3">Event Three</option>
                <option value="4">Event Four</option>
              </select>
            </div>
            <button class="primary-btn text-uppercase mt-20">Make Reservation</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End reservation Area -->

  <!-- Start gallery-area Area -->

        <!-- End gallery-area Area -->

  <!-- Start review Area -->
  <section class="review-area section-gap">
    <div class="container">
      <div class="row">
        <div class="active-review-carusel">
          <div class="single-review">
            <img src="/front/img/user.png" alt="">
            <h4>Hulda Sutton</h4>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </div>
            <p>
              “Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
            </p>
          </div>
          <div class="single-review">
            <img src="/front/img/user.png" alt="">
            <h4>Hulda Sutton</h4>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </div>
            <p>
              “Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
            </p>
          </div>
          <div class="single-review">
            <img src="/front/img/user.png" alt="">
            <h4>Hulda Sutton</h4>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </div>
            <p>
              “Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
            </p>
          </div>
          <div class="single-review">
            <img src="/front/img/user.png" alt="">
            <h4>Hulda Sutton</h4>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </div>
            <p>
              “Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End review Area -->

  <!-- Start blog Area -->
  <section class="blog-area section-gap" id="blog">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Latest From Our Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
          <div class="thumb">
            <img class="img-fluid" src="/front/img/b1.jpg" alt="">
          </div>
          <p class="date">10 Jan 2018</p>
          <a href="blog-single.html"><h4>Cooking Perfect Fried Rice
          in minutes</h4></a>
          <p>
            inappropriate behavior ipsum dolor sit amet, consectetur.
          </p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
          <div class="thumb">
            <img class="img-fluid" src="/front/img/b2.jpg" alt="">
          </div>
          <p class="date">10 Jan 2018</p>
          <a href="blog-single.html"><h4>Secret of making Heart
          Shaped eggs</h4></a>
          <p>
            inappropriate behavior ipsum dolor sit amet, consectetur.
          </p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
          <div class="thumb">
            <img class="img-fluid" src="/front/img/b3.jpg" alt="">
          </div>
          <p class="date">10 Jan 2018</p>
          <a href="blog-single.html"><h4>How to check steak if
          it is tender or not</h4></a>
          <p>
            inappropriate behavior ipsum dolor sit amet, consectetur.
          </p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
          <div class="thumb">
            <img class="img-fluid" src="/front/img/b4.jpg" alt="">
          </div>
          <p class="date">10 Jan 2018</p>
          <a href="blog-single.html"><h4>Seaseme and black seed
          Flavored Bun Rocks</h4></a>
          <p>
            inappropriate behavior ipsum dolor sit amet, consectetur.
          </p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
