<?php
$title = "Create Topic";
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
          <p class="section-pretitle">Create Topic</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Kategori forum "{{$data->name_kategori}}"</h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->

      <!-- GRID COLUMN -->
      <div class="grid-column">
        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">New Topic</p>
          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- FORM -->
            <form class="form" action="{{Route('saveNewTopic')}}" method="post">
              @csrf
              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM INPUT -->
                  <div class="form-input small active">
                    <label for="name">Judul Topic</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan judul topik">
                  </div>
                  <!-- /FORM INPUT -->
                </div>
                <!-- /FORM ITEM -->

                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM SELECT -->
                  <div class="form-select">
                    <label for="kategori_id">Kategori Forum</label>
                    <select id="kategori_id" name="kategori_id">
                      @foreach($kategoris as $kategori)
                      <option value="{{$kategori->id_ket}}" @if ($kategori->id_ket == $data->id) {{'selected="selected"'}}
                      @endif >{{$kategori->name_kategori}}</option>
                      @endforeach
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
              <!-- FORM ITEM -->
              <div class="form-item" style="margin-top:50px;">
                <!-- BUTTON -->
                <button type="submit" style="color:white; background-color: #23d2e2;"><p class="button full primary">Create Topic Now!</p></button>
                <!-- /BUTTON -->
              </div>
              <!-- /FORM ITEM -->
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
