

@extends('layouts.services-layout');


@section('content')
<div class="container mt-5 p-5" style="margin-left:10vw;">
    {{-- @php dd($equipement) @endphp --}}
    <form action="{{ route('equipements.update',$equipement->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
<div class="row">
       <div class="col-6"> <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" value="{{$equipement->description}}" name="description" id="description">
        </div>
        <div class="form-group">
            <label for="designation">Désignation</label>
            <input type="text" class="form-control" value="{{$equipement->designation}}" name="designation" id="designation">
        </div>
        <div class="form-group">
            <label for="reference">Réference</label>
            <input type="text" class="form-control" value="{{$equipement->designation}}"  name="reference" id="reference">
        </div>
        <div class="form-group">
            <label for="date">Date début</label>
            <input type="date" class="form-control" value="{{$equipement->date_debut}}" name="date" id="date">
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="text" class="form-control" value="{{$equipement->prix}}" name="prix" id="prix">
        </div></div>
        <div class="col-6">
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" value="{{$equipement->marque}}" name="marque" id="marque">
        </div>
        <div class="form-group">
            <label for="category">Catégorie</label>
            <select class="form-control" name="category" id="category">
                <option value="none" selected disabled hidden>Selecter une categorie</option>
                @foreach ($categories as $cat)
                    <option value={{ $cat->id }} @if($cat->id === $equipement->categorie_id ) selected @endif>{{ $cat->categorie }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="service">Service</label>
            <select class="form-control" name="service" id="caservice">
                <option value="none" selected disabled hidden>Selecter une service</option>

                @foreach ($services as $service)
                    <option value={{ $service->id }} @if($service->id === $equipement->service_id) selected @endif>{{ $service->nom_service }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="doc">Document(s)</label>
            <input type="file" class="form-control" name="doc" id="doc">
        </div>
        <div class="form-group">
            <label for="img">Image(s)</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="form-group">
            <input type="hidden" name="piece_rechange" value="0">
            <input type="checkbox" name="piece_rechange" id="piece_rechange" value="1" @if($equipement->piece_de_rechange === 1) checked @endif>
            <label for="piece_rechange">est une piéce de rechange : </label>
        </div>
</div>
        <button type="submit" class="btn btn-success"> Modifier </button>
    </div></form>
</div>
@endsection

@section('title','établissements')


