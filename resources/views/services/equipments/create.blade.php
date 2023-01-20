@extends('services.services-layout');


@section('content')
    <div class="container p-5" style="margin:auto;">
        <h1 class="m-5">Ajouter un équipements</h1>
        <form action="{{ route('equipements.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
<div class="row">
           <div class="col-6"> <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <div class="form-group">
                <label for="designation">Désignation</label>
                <input type="text" class="form-control" name="designation" id="designation">
            </div>
            <div class="form-group">
                <label for="reference">Réference</label>
                <input type="text" class="form-control" name="reference" id="reference">
            </div>
            <div class="form-group">
                <label for="date">Date début</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="text" class="form-control" name="prix" id="prix">
            </div></div>
            <div class="col-6">
            <div class="form-group">
                <label for="marque">Marque</label>
                <input type="text" class="form-control" name="marque" id="marque">
            </div>
            <div class="form-group">
                <label for="category">Catégorie</label>
                <select class="form-control" name="category" id="category">
                    @foreach ($categories as $cat)
                        <option value={{ $cat->id }}>{{ $cat->categorie }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="service">Service</label>
                <select class="form-control" name="service" id="caservice">
                    @foreach ($services as $service)
                        <option value={{ $service->id }}>{{ $service->nom_service }}</option>
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
                <input type="checkbox" name="piece_rechange" id="piece_rechange" value="1">
                <label for="piece_rechange">est une piéce de rechange : </label>
            </div>
</div>
            <button type="submit" class="btn btn-success">+ Ajouter un équipement</button>
        </div></form>
    </div>
@endsection

@section('title', 'ajouter un équipement ')
