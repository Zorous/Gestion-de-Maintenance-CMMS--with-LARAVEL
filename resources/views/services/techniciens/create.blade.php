

@extends('layouts.services-layout');


@section('content')
<div class="container mt-5 p-5" style="margin-left:10vw;">
    <h1 class="m-5">Ajouter un Technicien</h1>
<form action="{{route('techniciens.store')}}" method="POST" enctype="multipart/form-data">
@csrf
   
  
    <div class="form-group">
      <label for="tele">Numero de Télephone</label>
      <input type="text" class="form-control" name="tele" id="tele" >
    </div>
  
    <div class="form-group">
      <label for="user_id">User </label>
      <select  name="user_id" id="user_id">
        @foreach($users as $user)
        <option value={{$user->id}}>{{$user->name}}</option>
        @endforeach
      </select>
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
      <label for="image">Image</label><br>
      <small style="color:yellow">[Champ facultative]</small>

      <input type="file" class="form-control" name="image" id="image" >
    </div>


    <button type="submit" class="btn btn-success">+ Ajouter</button>
  </form>
</div>
@endsection

@section('title','ajouter un technicien')


