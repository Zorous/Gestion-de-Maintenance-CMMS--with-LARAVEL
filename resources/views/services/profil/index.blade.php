@extends('layouts.services-layout');


@section('content')
<div class="content-wrapper mt-5" style="margin-right:20vw;">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/services">Home</a></li>
                  <li class="breadcrumb-item active">User Profile</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content" >
          <div class="container-fluid">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-md-8">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user shadow-lg">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header text-white"
                           style="background: url('../dist/img/photo1.png') center center;">
                        <h3 class="widget-user-username text-right">{{$profile->name}}</h3>
                        <h5 class="widget-user-desc text-right">Admin</h5>
                      </div>
                      <div class="widget-user-image">
                        <img class="img-circle" src="{{url('/uploads/profil_imgs/'.$profile->image)}}" alt="User Avatar">
                        <a href={{"/profile/".$profile->id."/edit"}} class="btn btn-warning" style="border-radius:120px;"><i class="fa-solid fa-user-pen"></i></a>
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <h5 class="description-header">3,200</h5>
                              <span class="description-text">SALES</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <h5 class="description-header">13,000</h5>
                              <span class="description-text">FOLLOWERS</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4">
                            <div class="description-block">
                              <h5 class="description-header">35</h5>
                              <span class="description-text">PRODUCTS</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->
                  </div>

                  <!-- /.col -->
              </div>
              <!-- /.col -->

            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
</div>
@endsection

@section('title','établissements')
