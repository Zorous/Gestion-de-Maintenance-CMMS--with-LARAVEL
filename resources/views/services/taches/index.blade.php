@extends('layouts.services-layout');


@section('content')

<div class="content-wrapper">

<section class="content">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Voila les établissements disponible : </h1>
           <a href="{{ route('taches.create') }}" style="margin:auto;">
            <button class="btn btn-warning m-5">
            + Ajouter une tache
            </button></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/services">Home</a></li>
              <li class="breadcrumb-item active">établissements </li>
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
      <h3 class="card-title">Taches</h3>
    </div>
    <!-- /.card-header -->

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Description</th>
          <th>Date</th>
          <th>Durée</th>
          <th>Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($taches as $tache)
         <tr>
<td>{{$tache->id}}</td>
<td>{{$tache->description}}</td>
<td>{{$tache->date}}</td>
<td>{{$tache->duree}}</td>
          <td style="display:flex;">
           <a href="{{ route('taches.edit',$tache->id) }}">
            <button class="btn btn-warning mr-2"><i class="fa-solid fa-pen-to-square"></i></button></a>
             <form onsubmit="confirm('êtes-vous sûr de vouloir supprimer cet élément')" method="post" action="{{ route('taches.destroy', $tache->id) }}">
                @csrf
                @method('DELETE')
                 <button type="submit" class="btn btn-danger mb-2"><i class="fa-solid fa-trash"></i></button>
            </form>
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

@section('title','taches')
