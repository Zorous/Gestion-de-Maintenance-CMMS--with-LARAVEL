

@extends('services.services-layout');


@section('content')
<div class="container mt-5 p-5" style="margin-left:10vw;">
<form action={{"/services/etablissements/update/".$id}} method="POST">
@csrf
 {{ method_field('PUT') }}

    <div class="form-group">
      <label for="raison">Raison Social</label>
      <input type="text" class="form-control" name="raison-social" value={{$etab->raison_social}}  id="raison" aria-describedby="emailHelp" placeholder="(raison social)">
    </div>
    <div class="form-group">
      <label for="adresse">Adresse</label>
      <input type="text" class="form-control" value={{$etab->adresse}} name="adresse" id="adresse" placeholder="(Hay Saada ....)">
    </div>
    <div class="form-group">
      <label for="tele">Télephone</label>
      <input type="text" class="form-control" value={{$etab->telephone}} name="tele" id="tele" placeholder="+212......">
    </div>
    <div class="form-group">
      <label for="responsable">Responsable</label>
      <input type="text" class="form-control" value={{$etab->responsable}} name="responsable" id="responsable" placeholder="Phone Number">
    </div>

    <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> update</button>
  </form>
</div>
@endsection

@section('title','établissements')


