

@extends('layouts.services-layout');


@section('content')
<div class="container mt-5 p-5" style="margin-left:10vw;">
<form action={{"/services/profile/update/".$profile->id}} method="POST" enctype="multipart/form-data">
@csrf
 {{ method_field('PUT') }}

    <div class="form-group">
      <label for="name">Nom</label>
      <input type="text" class="form-control" name="name" value="{{$profile->name}}"  id="name" aria-describedby="emailHelp" placeholder="Thomson">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" value="{{$profile->email}}"  id="email" aria-describedby="emailHelp" placeholder="Thomson">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password"  id="password" aria-describedby="emailHelp" placeholder="*******">
    </div>
    <div class="form-group">
      <label for="image">image : </label>
      <small>{{$profile->image}}</small>
      <input type="file" class="form-control"  name="image" id="image">
    </div>

    <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> update</button>
  </form>
</div>
@endsection

@section('title','profil')


