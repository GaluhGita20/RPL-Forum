<?php
$title = "List Topics";
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
        <p class="section-filters-bar-title"><a href="{{Route('mainForum')}}">Forums</a><span class="separator"></span><a href="{{Route('listTopic', $data->slug)}}">{{$data->name_kategori}}</a></p>
        <!-- /SECTION FILTERS BAR TITLE -->

        <!-- SECTION FILTERS BAR TEXT -->
        <div class="section-filters-bar-text small-space">
          Last topic by &nbsp
          <a class="bold" href="#"> Galuh Gita</a>
          2 days ago
        </div>
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

      <!-- BUTTON -->
      <a href="{{Route('createTopic', $data->slug)}}" style="color:white;"><p class="button secondary">+ Create Discussion</p></a>
      <!-- /BUTTON -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

  <!-- TABLE -->
  <div class="table table-forum-discussion">
    <!-- TABLE HEADER -->
    <div class="table-header">
      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Discussion</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Voices</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Replies</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column padded-big-left">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Activity</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->
    </div>
    <!-- /TABLE HEADER -->

    <!-- TABLE BODY -->
    <div class="table-body">
      @foreach($topics as $topic)
      <!-- TABLE ROW -->
      <div class="table-row medium">
        <!-- TABLE COLUMN -->
        <div class="table-column">
          <!-- DISCUSSION PREVIEW -->
          <div class="discussion-preview">
            <!-- DISCUSSION PREVIEW TITLE -->
            <a class="discussion-preview-title" href="{{Route('diskusiTopic')}}">{{$topic->name_topic}}</a>
            <!-- /DISCUSSION PREVIEW TITLE -->

            <!-- DISCUSSION PREVIEW META -->
            <div class="discussion-preview-meta">
              <!-- DISCUSSION PREVIEW META TEXT -->
              <p class="discussion-preview-meta-text">Started by &nbsp</p>
              <!-- /DISCUSSION PREVIEW META TEXT -->

              <!-- DISCUSSION PREVIEW META TEXT -->
              <p class="discussion-preview-meta-text"><a href="#"> belum ada user</a> 1 day ago</p>
              <!-- /DISCUSSION PREVIEW META TEXT -->
            </div>
            <!-- /DISCUSSION PREVIEW META -->
          </div>
          <!-- /DISCUSSION PREVIEW -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">19</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">24</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column padded-big-left">
          <!-- USER STATUS -->
          <div class="user-status">
            <!-- USER STATUS AVATAR -->
            <a class="user-status-avatar" href="#">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar small no-outline" style="background-image:url('../asset/user/avatar-lg.png'); background-size:cover;"></div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER STATUS AVATAR -->
        
            <!-- USER STATUS TITLE -->
            <p class="user-status-title"><a class="bold" href="#">Bagus Prayogo</a></p>
            <!-- /USER STATUS TITLE -->
        
            <!-- USER STATUS TEXT -->
            <p class="user-status-text small">2 minutes ago</p>
            <!-- /USER STATUS TEXT -->
          </div>
          <!-- /USER STATUS -->
        </div>
        <!-- /TABLE COLUMN -->
      </div>
      <!-- /TABLE ROW -->
      @endforeach
    </div>
    <!-- /TABLE BODY -->
  </div>
  <!-- /TABLE -->

  <!-- SECTION PAGER BAR -->
  <div class="section-pager-bar">
    <!-- SECTION PAGER -->
    <div class="section-pager">
      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item active">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">01</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">02</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">03</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">04</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">05</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">06</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->
    </div>
    <!-- /SECTION PAGER -->

    <!-- SECTION PAGER CONTROLS -->
    <div class="section-pager-controls">
      <!-- SLIDER CONTROL -->
      <div class="slider-control left disabled">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->

      <!-- SLIDER CONTROL -->
      <div class="slider-control right">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->
    </div>
    <!-- /SECTION PAGER CONTROLS -->
  </div>
  <!-- /SECTION PAGER BAR -->
</div>
<!-- /CONTENT GRID -->



@endsection
