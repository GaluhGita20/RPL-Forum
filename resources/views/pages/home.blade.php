<?php
$page = "Home";
?>

@extends('layouts.template')
@section('content')

@include('components.navbar')

<!-- Banner -->
<div class="banner" data-bg-img="assets/img/banner/banner-bg.png">
  <div class="banner_slider">
    <!-- Single Slider -->
    <div class="single_slide">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Slider Content -->
            <div class="banner_content text-center">
              <h1>Lorem Ipsum, Dolor Sit Amet</h1>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore ab dolorem temporibus quia. Quesia
              Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>

              <a href="#" class="btn">Explore More</a>
            </div>
            <!-- End Slider Content -->
          </div>
        </div>

        <!-- Banner Images -->
        <div class="banner-images row justify-content-between align-items-end">
          <!-- Single Banner Image -->
          <div class="single-banner-image text-center col-sm-6 d-none d-sm-block">
            <div class="search-icon-box position-absolute">
              <img src="assets/img/banner/search-icon.png" alt="">
            </div>
            
            <img src="assets/img/banner/banner-image-1.png" alt="">
          </div>
          <!-- End Single Banner Image -->

          <!-- Single Banner Image -->
          <div class="single-banner-image text-center col-sm-6">
            <img src="assets/img/banner/icon-1.png" alt="" class="banner-icon icon-1 fa-spin">
            <img src="assets/img/banner/icon-2.png" alt="" class="banner-icon icon-2 fa-spin">
            <img src="assets/img/banner/icon-3.png" alt="" class="banner-icon icon-3 fa-spin">
            <img src="assets/img/banner/banner-image-2.png" alt="">
          </div>
          <!-- End Single Banner Image -->
        </div>
        <!-- End Banner Images -->
      </div>
    </div>
    <!-- End Single Slider -->
  </div>
</div>
<!-- End Banner -->

<!-- Services -->
<section class="pt-140 pb-140">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Section Title -->
        <div class="section-title text-center">
          <h2>Lorem Ipsum Dolor sit Amet Consectetur Adipisicing Alit<br>
            Nam Tempora Numquam Voluptates?</h2>
        </div>
        <!-- End Section Title -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
          <!-- Single Service -->
          <div class="single-service" style="height: 286px;">
              <!-- Icon -->
              <div class="icon">
                <!-- Pentingg!!! Belum input icon -->
                  <img src="/assets/img/icon/icon-1.svg" class="svg" alt="">
              </div>
              <!-- End Icon -->

              <!-- Content -->
              <div class="content">
                  <h3><a href="service-details.html">First Activity</a></h3>
                  <p>Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat tincidunt nam sem.</p>
              </div>
              <!-- End Content -->
          </div>
          <!-- End Single Service -->
      </div>
      <div class="col-lg-4">
          <!-- Single Service -->
          <div class="single-service" style="height: 286px;">
              <!-- Icon -->
              <div class="icon">
                <!-- Pentingg!!! Belum input icon -->
                <img src="assets/img/icon/icon-2.svg" class="svg" alt="">
              </div>
              <!-- End Icon -->

              <!-- Content -->
              <div class="content">
                <h3><a href="service-details.html">Second Activity</a></h3>
                <p>Proin ex ipsum, facilisis id tincidunt sed, vulputate in lacus. Donec pharetra faucibus.</p>
              </div>
              <!-- End Content -->
          </div>
          <!-- End Single Service -->
      </div>
      <div class="col-lg-4">
          <!-- Single Service -->
          <div class="single-service" style="height: 286px;">
              <!-- Icon -->
              <div class="icon">
                <!-- Pentingg!!! Belum input icon -->
                <img src="assets/img/icon/icon-3.svg" class="svg" alt="">
              </div>
              <!-- End Icon -->

              <!-- Content -->
              <div class="content">
                <h3><a href="service-details.html">Third Activity</a></h3>
                <p>Cras eu elit congue, placerat dui ut, crew tincidunt nisl. Nulla leo elit, pharetra bibendum justo.</p>
              </div>
              <!-- End Content -->
          </div>
          <!-- End Single Service -->
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="text-center mt-20">
          <a href="#" class="btn-inline service-btn">View Our All Activity</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Services -->

<!-- Feature -->
<section class="pb-140">
  <div class="container">
    <div class="row justify-content-between align-items-center pb-140">
      <div class="col-lg-5">
        <!-- Feature Image -->
        <div class="mb-50 mb-lg-0">
          <!-- Belum input gambar -->
          <img src="assets/img/feature/feature-1.png" alt="">
        </div>
        <!-- End Feature Image -->
      </div>
      <div class="col-lg-6">
        <!-- Section Title -->
        <div class="section-title style--two">
            <div class="title-border">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <h2>First Activity Explanation</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci quae perferendis repudiandae eveniet labore quia facere modi magnam vero soluta vitae excepturi, odit doloremque rem placeat, deserunt tempore officiis est.</p>
        </div>
        <!-- End Section Title -->

        <!-- List Check -->
        <ul class="list-check">
          <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit</li>
          <li>Adipisci quae perferendis repudiandae</li>
          <li>Eveniet labore quia facere modi magnam vero soluta vitae excepturi</li>
        </ul>
        <!-- End List Check -->
      </div>
    </div>

    <div class="row pb-140">
      <div class="col-lg-6">
        <!-- Section Title -->
        <div class="section-title style--two">
            <div class="title-border">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <h2>Second Activity Explanation<br>
            "All Lorem Ipsum"</h2>
            <p><b>Eveniet labore quia facere modi magnam vero soluta vitae excepturi adipisci quae perferendis repudiandae</b></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, maiores eveniet dolorum inventore repellendus rem voluptatum asperiores, cupiditate eaque, exercitationem explicabo! Suscipit eveniet doloremque adipisci minima perspiciatis nulla obcaecati iure.</p>
        </div>
        <!-- End Section Title -->
      
        <a href="#" class="btn-inline mt-10">Read More</a>
      </div>
      <div class="col-lg-6 order-first order-lg-last">
        <!-- Feature Image -->
        <div class="mb-50 mb-lg-0">
          <!-- Belum input gambar -->
          <img src="assets/img/feature/feature-2.png" alt="">
        </div>
        <!-- End Feature Image -->
      </div>
    </div>

    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5">
        <!-- Feature Image -->
        <div class="mb-50 mb-lg-0">
          <!-- Belum input gambar -->
          <img src="assets/img/feature/feature-3.png" alt="">
        </div>
        <!-- End Feature Image -->
      </div>
      <div class="col-lg-6">
        <!-- Section Title -->
        <div class="section-title style--two">
          <div class="title-border">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <h2>Second Activity Explanation</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sequi facilis alias similique numquam.</p>
        </div>
        <!-- End Section Title -->
  
        <!-- List Check -->
        <ul class="list-check">
          <li>Consectetur adipisicing elit. Tempora eum excepturi obcaecati at animi </li>
          <li>Minus maiores officiis impedit esse, facilis nam consequatur magnam optio harum! Voluptatum ab totam quis (nihil).</li>
        </ul>
        <!-- End List Check -->
      </div>
    </div>
  </div>
</section>
<!-- End Feature -->


<!-- Testimonial -->
<section class="pt-140 pb-140">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Section Title -->
        <div class="section-title text-center">
          <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit <br>
          csafe. Deserunt laudantium ratione sint rem.</h2>
        </div>
        <!-- End Section Title -->
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <!-- Testimonial -->
        <div class="testimonial-slider owl-carousel" data-owl-animate-in="slideInDown" data-owl-animate-out="slideOutUp" data-owl-nav="false" data-owl-dots="true" data-owl-mouse-drag="false" data-owl-autoplay="false">
          <!-- Single Testimonial -->
          <div class="single-testimonial text-center">
            <div class="single-testimonial-inner">

              <div class="content">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque harum asperiores at numquam, aut odit iusto. Vero, distinctio, placeat laudantium ratione ex alias id libero labore numquam culpa quaerat quidem?.</p>

                <p class="author"><b>Ashton Lees</b> <span>- CEO at COTheme</span></p>
              </div>
              <div class="image">
                <img src="assets/img/author/author-1.jpg" data-rjs="2" alt="">
              </div>
            </div>
          </div>
          <!-- End Single Testimonial -->

          <!-- Single Testimonial -->
          <div class="single-testimonial text-center">
            <div class="single-testimonial-inner">
              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias exercitationem culpa minus quidem nulla debitis fugiat ex hic ipsa veritatis. Rerum quam qui omnis facere repudiandae vel, nobis non debitis!.</p>

                <p class="author"><b>Sah Sojeeb</b> <span>- COO at aawards</span></p>
              </div>
              <div class="image">
                <img src="assets/img/author/author-2.jpg" data-rjs="2" alt="">
              </div>
            </div>
          </div>
          <!-- End Single Testimonial -->

          <!-- Single Testimonial -->
          <div class="single-testimonial text-center">
            <div class="single-testimonial-inner">

              <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione vel illo ut laborum! Deleniti hic asperiores beatae placeat. Quos itaque facilis sit eaque accusamus minima nihil pariatur dolor eum quasi?.</p>

                <p class="author"><b>XDR Emran Pro</b><span>- CR at CrazyHead</span></p>
              </div>
              <div class="image">
                <img src="assets/img/author/author-3.jpg" data-rjs="2" alt="">
              </div>
            </div>
          </div>
          <!-- End Single Testimonial -->
        </div>
        <!-- End Testimonial -->
      </div>
    </div>
  </div>
</section>
<!-- End Testimonial -->


<!-- Other Footer -->
<section class="other-sites">
  <div class="container">
    <div class="row content justify-content-center" style="align-items: center;">
      <div class="col-lg-4 col-12 text-center text justify-content-center" style="align-items: center;">
        <p><a class="text-decoration-none text-white" href="#">Ministry of Tourism and Creative Economy<br><span> Republic of Indonesia</span></a>
        </p>
      </div>
      <div class="col-lg-2 col-sm-4 my-3 col-4 d-flex justify-content-center text-center image"><a href="#"> <img src="../asset/umum/yatch.svg" alt="" width="100%"></a></div>
      <div class="col-lg-2 col-sm-4 my-3 col-4 d-flex justify-content-center text-center image"><a href="#"> <img src="../asset/umum/yatch.svg" alt="" width="100%"></a></div>
      <div class="col-lg-2 col-sm-4 my-3 col-4 d-flex justify-content-center text-center image"><a href="#"> <img src="../asset/umum/yatch.svg" alt="" width="100%"></a></div>
    </div>
  </div>
</section>



@include('components.footer')

@endsection