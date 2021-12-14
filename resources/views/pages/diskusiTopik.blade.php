<?php
$title = "Diskusi Topic";
$page = "forum";
?>


@extends('layouts.app2')

@section('content')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  <div class="section-banner"></div>
  <!-- /SECTION BANNER -->

  @foreach($room as $dataroom)
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Forum Discussion</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title pinned">{{$dataroom->name_topic}}</h2>
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
        <p class="section-filters-bar-title"><a href="#">Forums</a><span class="separator"></span><a href="{{Route('listTopic',$dataroom->slug_kat)}}">{{$dataroom->name_kategori}}<span class="separator"></span><a href="{{$dataroom->slug_topic}}">{{$dataroom->name_topic}}</a></p>
        <!-- /SECTION FILTERS BAR TITLE -->

        @foreach($last_post as $lastpost)
        <!-- SECTION FILTERS BAR TEXT -->
        <div class="section-filters-bar-text small-space">
          Last post by
          <!-- /USER AVATAR -->
          <a class="bold" href="#">&nbsp {{$lastpost->name}}</a>
          {{ \Carbon\Carbon::parse($lastpost->created_at)->diffForHumans() }}
        </div>
        <!-- /SECTION FILTERS BAR TEXT -->
        @endforeach
      </div>
      <!-- /SECTION FILTERS BAR INFO -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->
  

  <!-- GRID -->
  <div class="grid grid-12">
    <!-- FORUM CONTENT -->
    <div class="forum-content">
      <!-- FORUM POST HEADER -->
      <div class="forum-post-header">
        <!-- FORUM POST HEADER TITLE -->
        <p class="forum-post-header-title">Author</p>
        <!-- /FORUM POST HEADER TITLE -->
    
        <!-- FORUM POST HEADER TITLE -->
        <p class="forum-post-header-title">Post</p>
        <!-- /FORUM POST HEADER TITLE -->
      </div>
      <!-- /FORUM POST HEADER -->

      <!-- FORUM POST LIST -->
      <div class="forum-post-list">
        @foreach($posts as $post)
        <!-- FORUM POST -->
        <div class="forum-post">
          <!-- FORUM POST META -->
          <div class="forum-post-meta">
            <!-- FORUM POST TIMESTAMP -->
            <p class="forum-post-timestamp"></p>
            <!-- /FORUM POST TIMESTAMP -->
      
            <!-- FORUM POST ACTIONS -->
            <div class="forum-post-actions">
              <!-- FORUM POST ACTION -->
              <p class="forum-post-action light">Report</p>
              <!-- /FORUM POST ACTION -->
      
              <!-- FORUM POST ACTION -->
              <p class="forum-post-action">Reply</p>
              <!-- /FORUM POST ACTION -->
            </div>
            <!-- /FORUM POST ACTIONS -->
          </div>
          <!-- /FORUM POST META -->
      
          <!-- FORUM POST CONTENT -->
          <div class="forum-post-content">
            <!-- FORUM POST USER -->
            <div class="forum-post-user">
              <!-- USER AVATAR -->
              <a class="user-avatar no-outline" href="#">
                <div class="user-avatar small no-outline" style="background-image:url('../asset/user/avatar-lg.png'); background-size:cover; width:100%; height:100%;"></div>
              </a>
              <!-- /USER AVATAR -->
              
              <!-- FORUM POST USER TITLE -->
              <p class="forum-post-user-title"><a href="#">{{$post->name}}</a></p>
              <!-- /FORUM POST USER TITLE -->
      
              <!-- FORUM POST USER TITLE -->
              <p class="forum-post-user-text"><a href="#">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</a></p>
              <!-- /FORUM POST USER TITLE -->

              
              <!-- FORUM POST USER TAG -->
              @if($post->user_id == $dataroom->user_id)
              <p class="forum-post-user-tag organizer">Organizer</p>
              @else
              <p class="forum-post-user-tag organizer">Anggota</p>
              @endif
              <!-- /FORUM POST USER TAG -->
            </div>
            <!-- /FORUM POST USER -->
      
            <!-- FORUM POST INFO -->
            <div class="forum-post-info">
              <!-- FORUM POST PARAGRAPH -->
              <p class="forum-post-paragraph">{{$post->diskusi}}</p>
              <!-- /FORUM POST PARAGRAPH -->
            </div>
            <!-- /FORUM POST INFO -->
          </div>
          <!-- /FORUM POST CONTENT -->
        </div>
        <!-- /FORUM POST -->
        @endforeach
      </div>
      <!-- /FORUM POST LIST -->

      <!-- SECTION PAGER BAR WRAP -->
      <div class="section-pager-bar-wrap align-right">
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
      <!-- /SECTION PAGER BAR WRAP -->

      <!-- QUICK POST -->
      <div class="quick-post medium">
        <!-- QUICK POST HEADER -->
        <div class="quick-post-header">
          <!-- QUICK POST HEADER TITLE -->
          <p class="quick-post-header-title">Leave a Reply</p>
          <!-- /QUICK POST HEADER TITLE -->
        </div>
        <!-- /QUICK POST HEADER -->
        <!-- FORM -->
        <form class="form" action="{{Route('post_diskusi')}}" method="POST">
          @csrf
          <!-- QUICK POST BODY -->
          <div class="quick-post-body">
            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <input type="text" id="topic_id" name="topic_id" value="{{$dataroom->id_topic}}" hidden>
                <!-- FORM TEXTAREA -->
                <div class="form-textarea">
                  <textarea id="diskusi" name="diskusi" placeholder="Hi {{$user->name}}! Share your post here..."></textarea>
                  <!-- FORM TEXTAREA LIMIT TEXT -->
                  <p class="form-textarea-limit-text">998/1000</p>
                  <!-- /FORM TEXTAREA LIMIT TEXT -->
                </div>
                <!-- /FORM TEXTAREA -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->
          </div>
          <!-- /QUICK POST BODY -->
      
          <!-- QUICK POST FOOTER -->
          <div class="quick-post-footer">
            <!-- QUICK POST FOOTER ACTIONS -->
            <div class="quick-post-footer-actions">
              <!-- QUICK POST FOOTER ACTION -->
              <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert Photo">
                <!-- QUICK POST FOOTER ACTION ICON -->
                <svg class="quick-post-footer-action-icon icon-camera">
                  <use xlink:href="#svg-camera"></use>
                </svg>
                <!-- /QUICK POST FOOTER ACTION ICON -->
              </div>
              <!-- /QUICK POST FOOTER ACTION -->
      
              <!-- QUICK POST FOOTER ACTION -->
              <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert GIF">
                <!-- QUICK POST FOOTER ACTION ICON -->
                <svg class="quick-post-footer-action-icon icon-gif">
                  <use xlink:href="#svg-gif"></use>
                </svg>
                <!-- /QUICK POST FOOTER ACTION ICON -->
              </div>
              <!-- /QUICK POST FOOTER ACTION -->
            </div>
            <!-- /QUICK POST FOOTER ACTIONS -->
      
              <!-- QUICK POST FOOTER ACTIONS -->
              <div class="quick-post-footer-actions">
                <!-- BUTTON -->
                <p class="button void">Discard</p>
                <!-- /BUTTON -->
      
                <!-- BUTTON -->
                <button type="submit" class="button secondary">Post Reply</button>
                <!-- /BUTTON -->
              </div>
              <!-- /QUICK POST FOOTER ACTIONS -->
          </div>
          <!-- /QUICK POST FOOTER -->
        </form>
        <!-- /FORM -->
      </div>
      <!-- /QUICK POST -->
    </div>
    <!-- /FORUM CONTENT -->
  </div>
  <!-- /GRID -->
  @endforeach
</div>
<!-- /CONTENT GRID -->


@endsection
