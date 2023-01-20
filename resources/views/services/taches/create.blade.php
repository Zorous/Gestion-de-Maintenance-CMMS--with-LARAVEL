

@extends('services.services-layout');


@section('content')
<div class="container mt-5 p-5" style="margin-left:10vw;">
    <h1 class="m-5">Ajouter une Tache</h1>
<form action="{{route('taches.store')}}" method="POST">
@csrf
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description" >
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input type="date" class="form-control" name="date" id="date">
    </div>
    <div class="form-group">
      <label for="duree">Durée</label>
      <input type="number" class="form-control" name="duree" id="duree">
    </div>

    <button type="submit" class="btn btn-success">+ Ajouter une tache</button>
  </form>
</div>
@endsection

@section('title','ajouter une tache')


