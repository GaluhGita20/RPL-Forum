<?php
  $title="PROGNET - TRANSAKSI SIMPANAN";
?>

@extends('layouts.template')
@section('content')
    
  <!--**********************************
      Content body start
  ***********************************-->
  <div class="content-body">
    <div class="container-fluid">
      <div class="page-titles">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item"><a href="{{Route('home')}}">User</a></li>
          <li class="breadcrumb-item active"><a href="{{Route('add_user')}}">Create Data</a></li>
        </ol>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-xl-12 col-xxl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Form Data User</h4>
            </div>
            <div class="card-body">
              <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                <div>
                  <section>
                    <div class="row">
                      <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label class="text-label">Name*</label>
                            <input type="text" name="firstName" class="form-control" placeholder="Galuh Puspa Gita" required>
                        </div>
                      </div>
                      <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label class="text-label">Alamat*</label>
                            <textarea class="form-control" rows="2" id="comment" placeholder="Jln. RM Panji Anom 98, BTN Graha Garden C.10, Kota Mataram, NTB"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6 mb-2">
                          <div class="form-group">
                              <label class="text-label">No. KTP*</label>
                              <input type="text" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="2001231980120" required>
                          </div>
                      </div>
                      <div class="col-lg-6 mb-2">
                        <div class="form-group">
                          <label class="text-label">Phone Number*</label>
                          <input type="text" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="2001231980120" required>
                        </div>
                      </div>
                      <div class="col-lg-12 mb-3">
                        <div class="form-group">
                          <label class="text-label">Status*</label>
                          <div class="dropdown bootstrap-select form-control dropup">
                            <select class="form-control" id="sel1" tabindex="-98">
                              <option>Status Aktif/Nonaktif</option>
                              <option>Aktif</option>
                              <option>Nonaktif</option>
                              <!-- <option>4</option> -->
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 mb-3">
                        <div class="form-group">
                          <label class="text-label">Photo*</label>
                          <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="real-file">
                                <label class="custom-file-label" id="custom-text">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                      </div>
                    </div>
                  </section>
                  <script type="text/javascript">
                    const realFileBtn = document.getElementById("real-file");
                    const customTxt = document.getElementById("custom-text")

                    realFileBtn.addEventListener("change", function(){
                      if(realFileBtn.value){
                        customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
                      }
                    });
                  </script>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--**********************************
      Content body end
  ***********************************-->
@endsection