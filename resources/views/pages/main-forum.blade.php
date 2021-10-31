<?php
$title = "Main Forum";
?>


@extends('layouts.app')

@section('content')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  <div class="section-banner"></div>
  <!-- /SECTION BANNER -->

  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Welcome to</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">AyoBisa Forums</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v7">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- SECTION FILTERS BAR INFO -->
      <div class="section-filters-bar-info">
        <!-- SECTION FILTERS BAR TITLE -->
        <p class="section-filters-bar-title"><a href="#">Forums</a></p>
        <!-- /SECTION FILTERS BAR TITLE -->

        <!-- SECTION FILTERS BAR TEXT -->
        <p class="section-filters-bar-text">Kategori terakhir ditambahkan oleh <a class="highlighted" href="#">Admin</a> pada 2 minggu yang lalu</p>
        <!-- /SECTION FILTERS BAR TEXT -->
      </div>
      <!-- /SECTION FILTERS BAR INFO -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM ITEM -->
        <div class="form-item split">
          <!-- FORM INPUT -->
          <div class="form-input small">
            <label for="forum-search">Search Forums</label>
            <input type="text" id="forum-search" name="forum_search">
          </div>
          <!-- /FORM INPUT -->

          <!-- BUTTON -->
          <button class="button primary">
            <!-- ICON MAGNIFYING GLASS -->
            <svg class="icon-magnifying-glass">
              <use xlink:href="#svg-magnifying-glass"></use>
            </svg>
            <!-- /ICON MAGNIFYING GLASS -->
          </button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM ITEM -->
      </form>
      <!-- /FORM -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

  <!-- TABLE -->
  <div class="table table-forum-category">
    <!-- TABLE HEADER -->
    <div class="table-header">
      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Category</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Topics</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Posts</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column padded-big-left">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Recent Topics</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->
    </div>
    <!-- /TABLE HEADER -->

    @foreach($kategoris as $kategori)
    <!-- TABLE BODY -->
    <div class="table-body">
      <!-- TABLE ROW -->
      <div class="table-row big">
        <!-- TABLE COLUMN -->
        <div class="table-column">
          <!-- FORUM CATEGORY -->
          <div class="forum-category">
            <!-- FORUM CATEGORY IMAGE -->
            <a href="#">
              <img class="forum-category-image" src="../asset/forum/profil-categories.jpg" style="width:64px; height:64px;" alt="category-01">
            </a>
            <!-- /FORUM CATEGORY IMAGE -->

            <!-- FORUM CATEGORY INFO -->
            <div class="forum-category-info">
              <!-- FORUM CATEGORY TITLE -->
              <p class="forum-category-title"><a href="{{ route('listTopic', ['slug' => $kategori->slug])}}">{{$kategori->name_kategori}}</a></p>
              <!-- /FORUM CATEGORY TITLE -->

              <!-- FORUM CATEGORY TEXT -->
              <p class="forum-category-text">{{$kategori->desc}}}</p>
              <!-- /FORUM CATEGORY TEXT -->
            </div>
            <!-- /FORUM CATEGORY INFO -->
          </div>
          <!-- /FORUM CATEGORY -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">44</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">236</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column padded-big-left">
          <?php $n=0;?>
          @foreach($topics as $topic)
          @if($topic->kategori_forum_id == $kategori->id)
          <?php $n++;?>
          @if($n <= 3)
          <!-- TABLE LINK -->
          <a class="table-link" href="{{Route('diskusiTopic')}}">{{$topic->name_topic}}</a>
          <!-- /TABLE LINK -->
          @endif
          @endif
          @endforeach
        </div>
        <!-- /TABLE COLUMN -->
      </div>
      <!-- /TABLE ROW -->
    </div>
    <!-- /TABLE BODY -->
    @endforeach
  </div>
  <!-- /TABLE -->
</div>
<!-- /CONTENT GRID -->

@endsection
