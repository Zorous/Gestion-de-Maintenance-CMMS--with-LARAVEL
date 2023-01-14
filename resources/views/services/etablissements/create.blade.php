

@extends('services.services-layout');


@section('content')
<div class="container mt-5 p-5" style="margin-left:10vw;">
    <h1 class="m-5">Ajouter une établissements</h1>
<form action="/services/etablissements/store" method="POST">
@csrf
    <div class="form-group">
      <label for="raison">Raison Social</label>
      <input type="text" class="form-control" name="raison-social" id="raison" aria-describedby="emailHelp" placeholder="(raison social)">
    </div>
    <div class="form-group">
      <label for="adresse">Adresse</label>
      <input type="text" class="form-control" name="adresse" id="adresse" placeholder="(Hay Saada ....)">
    </div>
    <div class="form-group">
      <label for="tele">Télephone</label>
      <input type="text" class="form-control" name="tele" id="tele" placeholder="+212......">
    </div>
    <div class="form-group">
      <label for="responsable">Responsable</label>
      <input type="text" class="form-control" name="responsable" id="responsable" placeholder="Phone Number">
    </div>

    <button type="submit" class="btn btn-success">+ Ajouter une établissement</button>
  </form>
</div>
@endsection

@section('title','établissements')


