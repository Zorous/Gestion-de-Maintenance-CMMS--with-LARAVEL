@extends('services.services-layout');


@section('content')

<div class="content-wrapper">

<section class="content">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Voila les équipements : </h1>
           <a href="{{ route('equipements.create') }}" style="margin:auto;">
            <button class="btn btn-warning m-5">
            + Ajouter une equipment
            </button></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/services">Home</a></li>
              <li class="breadcrumb-item active">équipements </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid m-3">
      <div class="row">
         @foreach($equipments as $equipment)
        <div class="col col-sm-12 col-md-6">
{{-- <h1>{{print_r($equipments)}}</h1> --}}

<div class="card m-5" style="width: 18rem;">
  <img class="card-img-top" src={{url('uploads/equipements_imgs/'.$equipment->image)}} width="300px" height="300px" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$equipment->designation}}</h5>
    <p class="card-text">{{$equipment->description}}</p>
    <a href="#" class="btn btn-small btn-primary">Détaills</a>
    <a href="{{ route('equipements.edit',$equipment->id) }}"><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
    <form action="{{ route('equipements.destroy',$equipment->id) }}" method="post">
        @csrf
        @method('DELETE')
     <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>

    </form>
  </div>
</div>


</div>
   @endforeach
</div>
</div>

</section>

</div>

@endsection




@section('title','equipements');
