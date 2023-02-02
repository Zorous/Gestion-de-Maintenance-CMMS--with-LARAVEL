@extends('layouts.services-layout');


@section('content')
    <div class="content-wrapper" >
        <!-- Main content -->
        <h1 class="mt-5 ml-5">Voila les techniciens :</h1>
        <a href="{{ route('techniciens.create') }}" style="margin:auto;">
            <button class="btn btn-warning m-5">
            + Ajouter un techniciens
            </button></a>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
@foreach($techniciens as $tech)
              <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="{{ url('/uploads/techniciens_imgs/'.$tech->image) }}"
                             alt="User profile picture">
                      </div>

                      <h3 class="profile-username text-center">{{ $tech->nom." ".$tech->prenom}}</h3>

                      <p class="text-muted text-center">{{ $tech->specialite }}</p>

                      <ul class="list-group list-group-bordered mb-3">
                        <li class="list-group-item">
                          <b>Les Activités</b> <a class="float-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                          <b>Les Taches</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                          <b>Les Taches Complet</b> <a class="float-right">13,287</a>
                        </li>
                      </ul>

                      <a href={{"/services/technicien/mailForm/".$tech->id}} class="btn btn-primary btn-block"><b>Contact</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
@endforeach

            </div>
            </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection

@section('title','téchniciens')
