@extends('services.services-layout')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>

                <p>Les nouvelle tâches</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Projects</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Project Name
                    </th>
                    <th style="width: 30%">
                        Team Members
                    </th>
                    <th>
                        Project Progress
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                            </div>
                        </div>
                        <small>
                            47% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            </div>
                        </div>
                        <small>
                            60% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                            </div>
                        </div>
                        <small>
                            12% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                            </div>
                        </div>
                        <small>
                            35% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                            </div>
                        </div>
                        <small>
                            87% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>





        </div>





@endsection


@section('title','services')
