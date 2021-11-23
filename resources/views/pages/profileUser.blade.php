<?php
$title = "Profile Info";
?>


@extends('layouts.app2')

@section('content')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  <div class="section-banner"></div>
  <!-- /SECTION BANNER -->

  <!-- GRID -->
  <div class="grid grid-12 medium-space">
    <!-- GRID COLUMN -->
    <div class="account-hub-content">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
          <!-- SECTION PRETITLE -->
          <p class="section-pretitle">My Profile</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Profile Info</h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->

      <!-- GRID COLUMN -->
      <div class="grid-column">
        <!-- GRID -->
        <div class="grid grid-4-4-4 centered">
          <!-- USER PREVIEW -->
          <div class="user-preview small fixed-height">
            <!-- USER PREVIEW COVER -->
            <figure class="user-preview-cover liquid">
              <img src="../asset/user/cover/01.jpg" alt="cover-01">
            </figure>
            <!-- /USER PREVIEW COVER -->
        
            <!-- USER PREVIEW INFO -->
            <div class="user-preview-info">
              <div class="user-avatar-content mx-auto" style="background-image:url('../asset/user/avatar-lg.png'); background-size:cover; width:92px; height:92px; margin-top:-30px;"></div>
            </div>
            <!-- /USER PREVIEW INFO -->
          </div>
          <!-- /USER PREVIEW -->

          <!-- UPLOAD BOX -->
          <div class="upload-box">
            <!-- UPLOAD BOX ICON -->
            <svg class="upload-box-icon icon-members">
              <use xlink:href="#svg-members"></use>
            </svg>
            <!-- /UPLOAD BOX ICON -->
        
            <!-- UPLOAD BOX TITLE -->
            <p class="upload-box-title">Change Avatar</p>
            <!-- /UPLOAD BOX TITLE -->
        
            <!-- UPLOAD BOX TEXT -->
            <p class="upload-box-text">110x110px size minimum</p>
            <!-- /UPLOAD BOX TEXT -->
          </div>
          <!-- /UPLOAD BOX -->
        
          <!-- UPLOAD BOX -->
          <div class="upload-box">
            <!-- UPLOAD BOX ICON -->
            <svg class="upload-box-icon icon-photos">
              <use xlink:href="#svg-photos"></use>
            </svg>
            <!-- /UPLOAD BOX ICON -->
        
            <!-- UPLOAD BOX TITLE -->
            <p class="upload-box-title">Change Cover</p>
            <!-- /UPLOAD BOX TITLE -->
        
            <!-- UPLOAD BOX TEXT -->
            <p class="upload-box-text">1184x300px size minimum</p>
            <!-- /UPLOAD BOX TEXT -->
          </div>
          <!-- /UPLOAD BOX -->
        </div>
        <!-- /GRID -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">About Your Profile</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- FORM -->
            <form class="form">
              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM INPUT -->
                  <div class="form-input small active">
                    <label for="profile-name">Nama Lengkap</label>
                    <input type="text" id="profile-name" name="profile_name" value="{{ Auth::user()->name }}">
                  </div>
                  <!-- /FORM INPUT -->
                </div>
                <!-- /FORM ITEM -->

                <!--M FOR ITEM -->
                <div class="form-item">
                  <!-- FORM INPUT -->
                  <div class="form-input small active">
                    <label for="profile-public-email">Public Email</label>
                    <input type="text" id="profile-public-email" name="profile_public_email" value="{{ Auth::user()->email }}">
                  </div>
                  <!-- /FORM INPUT -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->

              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM INPUT -->
                  <div class="form-input small full">
                    <textarea id="profile-description" name="profile_description" placeholder="Ketik sekilas deskripsi tentang Anda"></textarea>
                  </div>
                  <!-- /FORM INPUT -->
                </div>
                <!-- /FORM ITEM -->

                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM SELECT -->
                  <div class="form-select">
                    <label for="profile-city">Provinsi</label>
                    <select id="profile-city" name="profile_city">
                      <option value="0">Pilih provinsi anda</option>
                      <option value="1" selected>Mataram</option>
                    </select>
                    <!-- FORM SELECT ICON -->
                    <svg class="form-select-icon icon-small-arrow">
                      <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /FORM SELECT ICON -->
                  </div>
                  <!-- /FORM SELECT -->
                  <!-- FORM INPUT -->
                  <div class="form-input small active">
                    <label for="profile-birthday">Birthday</label>
                    <input type="text" id="profile-birthday" name="profile_birthday" value="August 24th, 2003">
                  </div>
                  <!-- /FORM INPUT -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->

              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM SELECT -->
                  <div class="form-select">
                    <label for="profile-status">Status</label>
                    <select id="profile-status" name="profile_status">
                      <option value="0">Select your Status</option>
                      <option value="1" selected>In a Relationship</option>
                    </select>
                    <!-- FORM SELECT ICON -->
                    <svg class="form-select-icon icon-small-arrow">
                      <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /FORM SELECT ICON -->
                  </div>
                  <!-- /FORM SELECT -->
                </div>
                <!-- /FORM ITEM -->

                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM SELECT -->
                  <div class="form-select">
                    <label for="profile-status">Pekerjaan</label>
                    <select id="profile-status" name="profile_status">
                      <option value="0">Pilih pekerjaan anda</option>
                      <option value="1" selected>Pelajar/Mahasiswa</option>
                    </select>
                    <!-- FORM SELECT ICON -->
                    <svg class="form-select-icon icon-small-arrow">
                      <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /FORM SELECT ICON -->
                  </div>
                  <!-- /FORM SELECT -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->

            </form>
            <!-- /FORM -->
          </div>
          <!-- WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
        
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID COLUMN -->
  </div>
  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->

@endsection