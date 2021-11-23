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
            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
            <li class="breadcrumb-item active"><a href="{{Route('home')}}">User</a></li>
          </ol>
        </div>
        <!-- row -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <h4 class="card-title">Table User</h4>
                <a href="{{Route('add_user')}}"><div class="btn btn-primary">+ Add Data User</div></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-responsive-sm">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td class="sorting_1"><img class="rounded-circle" src="../images/avatar/2.png" alt="" style="display:block; margin-left:auto;margin-right:auto;"></td>
                      <td>Kolor Tea Shirt For Man</td>
                      <td><span class="badge badge-primary">Sale</span>
                      </td>
                      <td>January 22</td>
                      <td class="color-primary">$21.56</td>
                      <td>
                        <div class="d-flex">
                          <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="sorting_1 mx-auto"><img class="rounded-circle" src="../images/avatar/2.png" alt="" style="display:block; margin-left:auto;margin-right:auto;"></td>
                        <td>Kolor Tea Shirt For Women</td>
                        <td><span class="badge badge-success light">Tax</span>
                        </td>
                        <td>January 30</td>
                        <td class="color-success">$55.32</td>
                        <td>
                        <div class="d-flex">
                          <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="sorting_1"><img class="rounded-circle" src="../images/avatar/2.png" alt="" style="display:block; margin-left:auto;margin-right:auto;"></td>
                        <td>Blue Backpack For Baby</td>
                        <td><span class="badge badge-danger">Extended</span>
                        </td>
                        <td>January 25</td>
                        <td class="color-danger">$14.85</td>
                        <td>
                        <div class="d-flex">
                          <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
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

    