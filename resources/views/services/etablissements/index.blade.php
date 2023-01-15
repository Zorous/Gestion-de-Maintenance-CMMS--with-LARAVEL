@extends('services.services-layout');


@section('content')
<div class="content-wrapper">

<section class="content">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Voila les établissements disponible : </h1>
           <a href="/services/etablissements/create" style="margin:auto;">
            <button class="btn btn-warning m-5">
            + Ajouter une établissements
            </button></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
   {{--  <h1>{{$etabs}}</h1> --}}
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Raison Social</th>
          <th>Adresse</th>
          <th>Télephone</th>
          <th>Responsable</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($etabs as $etab)
         <tr>
          <td>{{$etab->id}}</td>
          <td>{{$etab->raison_social}}</td>
          <td>{{$etab->adresse}}</td>
          <td>{{$etab->telephone}}</td>
          <td>{{$etab->responsable}}</td>
          <td>
           <a href="{{ url('/etablissements/edit/'.$etab->id) }}"><button class="btn btn-warning mb-2"><i class="fa-solid fa-pen-to-square"></i></button></a>
            <a href="{{ url('/etablissements/delete/'.$etab->id) }}"> <button class="btn btn-danger mb-2"><i class="fa-solid fa-trash"></i></button></a>
          </td>
        </tr>
        @endforeach

        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
</div>
</div>

</section>

</div>
@endsection

@section('title','établissements')
