

@extends('services.services-layout');


@section('content')
<div class="container mt-5 p-5" style="margin-left:10vw;">
    <h1 class="m-5">Modifier cette tache</h1>
<form action={{route("taches.update",$id)}} method="POST">
@csrf
{{ method_field('PUT') }}

    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description"  value="{{$tache->description}}" >
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input type="date" class="form-control" name="date" id="date" value={{$tache->date}}>
    </div>
    <div class="form-group">
      <label for="duree">Durée</label>
      <input type="number" class="form-control" value={{$tache->duree}} name="duree" id="duree">
    </div>

    <button type="submit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i>Modifier</button>
  </form>
</div>
@endsection

@section('title','ajouter une tache')


