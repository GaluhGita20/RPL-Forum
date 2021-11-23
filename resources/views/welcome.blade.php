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
          <h1 data-aos="fade-up">Hello, || Anda belum Login</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Ayo Mulai Diskusi dan Berbagi dengan AyoBisa</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="{{Route('login')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" >
                <span>Login</span>
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
        <h3>Ad cupiditate sed est odio</h3>
        <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="400">
        <img src="../asset/landing/features-2.png" class="img-fluid" alt="">
        <h3>Voluptatem voluptatum alias</h3>
        <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="600">
        <img src="../asset/landing/features-1.png" class="img-fluid" alt="">
        <h3>Fugit cupiditate alias nobis.</h3>
        <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
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
          Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
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

 <!-- ======= F.A.Q Section ======= -->
 <section id="faq" class="faq">

<div class="container pt-5 pb-5" data-aos="fade-up">

  <header class="section-header">
    <p>Hal yang Sering Ditanya</p>
  </header>

  <div class="row">
    <div class="col-lg-6">
      <!-- F.A.Q List 1-->
      <div class="accordion accordion-flush" id="faqlist1">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
              Non consectetur a erat nam at lectus urna duis?
            </button>
          </h2>
          <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
            <div class="accordion-body">
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
              Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
            </button>
          </h2>
          <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
            <div class="accordion-body">
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
            </button>
          </h2>
          <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
            <div class="accordion-body">
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="col-lg-6">

      <!-- F.A.Q List 2-->
      <div class="accordion accordion-flush" id="faqlist2">

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
              Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
            </button>
          </h2>
          <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
            <div class="accordion-body">
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
              Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
            </button>
          </h2>
          <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
            <div class="accordion-body">
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
              Varius vel pharetra vel turpis nunc eget lorem dolor?
            </button>
          </h2>
          <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
            <div class="accordion-body">
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</div>

</section>
<!-- End F.A.Q Section -->

@include('components.footer')

@endsection