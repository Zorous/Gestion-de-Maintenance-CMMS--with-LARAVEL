

@extends('layouts.services-layout');


@section('content')
<div class="container mt-5 p-5" style="margin-left:10vw;">
    <h1 class="m-5">Ajouter un Technicien</h1>
<form action="{{route('techniciens.store')}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" name="nom" id="nom" >
    </div>

    <div class="form-group">
      <label for="prenom">Prenom</label>
      <input type="text" class="form-control" name="prenom" id="prenom" >
    </div>
    <div class="form-group">
      <label for="tele">Numero de Télephone</label>
      <input type="text" class="form-control" name="tele" id="tele" >
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" >
    </div>
    <div class="form-group">
      <label for="specialites">Spécialités</label>
      <select  name="specialites" id="specialites">
        @foreach($specialites as $specialite)
        <option value={{$specialite->id}}>{{$specialite->specialite}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" name="image" id="image" >
    </div>


    <button type="submit" class="btn btn-success">+ Ajouter</button>
  </form>
</div>
@endsection

@section('title','ajouter un technicien')


