<?php
$title = "Top Topics";
?>


@extends('layouts.app')

@section('content')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION -->
  <section class="section">
    <!-- SECTION BANNER -->
    <div class="section-banner"></div>
    <!-- /SECTION BANNER -->
    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Top topics</p>
        <!-- /SECTION PRETITLE -->

        <!-- SECTION TITLE -->
        <h2 class="section-title">Topic Terpanas Akhir Ini</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

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
          <p class="table-header-title">Last Activity</p>
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
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->

                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="{{Route('profileUser')}}">Ananda</a> 22 minutes ago<span class="separator">-</span><a class="highlighted" href="{{Route('listTopic', $topic->slug)}}">{{$topic->name_kategori}}</a></p>
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
            <p class="table-title">4</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">12</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER AVATAR -->
              <a href="{{Route('profileUser')}}">
                <div class="user-avatar small no-outline mx-auto" style="background-image:url('../asset/user/avatar-lg.png'); background-size:cover;"></div>
              </a>
              <!-- /USER AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title" style="text-align:center"><a class="bold" href="{{Route('profileUser')}}">Dedens</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small" style="text-align:center">3 hours, 22 minutes ago</p>
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
  </section>
  <!-- /SECTION -->
</div>
<!-- /CONTENT GRID -->

@endsection