<?php
$page = "Home";
?>

@extends('layouts.template')
@section('content')

@include('components.navbar')
    <!-- Additional CSS Files -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/landing/template.css">
    <link rel="stylesheet" href="../css/landing/landing.css">



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Hello, {{ Auth::user()->name }} </h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Ayo Mulai Diskusi dan Berbagi dengan AyoBisa</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="{{Route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" >
                <span>Logout</span>
                <div class="psvg">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
                </div>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              <a href="{{Route('mainForum')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Mulai Diskusi</span>
                <div class="psvg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="../asset/landing/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<!-- ======= Values Section ======= -->
<section id="values" class="values">

<div class="pt-5 container" data-aos="fade-up">

  <header class="section-header">
    <p>Bisa Apa Saja dengan AyoBisa?</p>
  </header>

  <div class="row">

    <div class="col-lg-4">
      <div class="box" data-aos="fade-up" data-aos-delay="200">
        <img src="../asset/landing/features-1.png" class="img-fluid" alt="">
        <h3>Mulai Berbagi Info Bencana</h3>
        <p>Ayo sebarkan informasi mengenai berbagai bencana yang sedang terjadi di Indonesia</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="400">
        <img src="../asset/landing/features-2.png" class="img-fluid" alt="">
        <h3>Mulai Berbagi dengan Sesama</h3>
        <p>Ayo mulai berbagi terhadap sesama yang sedang membutuhkan</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="600">
        <img src="../asset/landing/features-1.png" class="img-fluid" alt="">
        <h3>Mulai Berdiskusi Mengenai Bencana Alam yang Terjadi</h3>
        <p>Ayo mulai berdiskusi mengenai berbagai bencana yang terjadi di Indonesia</p>
      </div>
    </div>

  </div>

</div>

</section><!-- End Values Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about">

<div class="pb-5 container" data-aos="fade-up">
  <div class="row gx-0">

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="content">
        <h2>Forum di KitaBisa</h2>
        <p>
        AyoBisa dilatarbelakangi oleh banyaknya bencana yang terjadi di Indonesia, baik itu bencana alam ataupun bencana yang disebabkan oleh manusia 

        </p>
        <div class="text-center text-lg-start">
          <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Read More</span>
            <div class="psvg">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
      <img src="../asset/landing/about.jpg" class="img-fluid" alt="">
    </div>

  </div>
</div>

</section><!-- End About Section -->


@include('components.footer')

@endsection