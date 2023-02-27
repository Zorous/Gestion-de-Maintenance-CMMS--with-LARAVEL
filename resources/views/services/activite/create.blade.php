@extends('layouts.services-layout');


@section('content')
    <div class="container mt-5 p-5" style="margin-left:10vw;">
        <h1 class="m-5">Ajouter une Activités</h1>
        <form action="{{ route('activites.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control @error('description') border-danger @enderror"
                    name="description"
                    id="description">
                @error('description')
                    <p style="color:red;">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control @error('date') border-danger @enderror" name="date"
                    id="date">
                @error('date')
                    <p style="color:red;">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="duree">Durée</label>
                <input type="number" class="form-control @error("duree") border-danger @enderror" name="duree" id="duree">
                @error('duree')
                    <p style="color:red;">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="duree">Technicien</label><br>
                <small style="color:orange">(si vous ne trouvez pas le technicien que vous voulez ici, ajoutez-le d'abord dans la liste des techniciens)</small>
                <select name="technicien_id" class="form-control @error("description") border-danger @enderror">
                    <option value="none" selected disabled hidden>Affecter un technicien a cette activité</option>
                    @foreach($techniciens as $technicien)
                    <option value="{{$technicien->id}}">{{$technicien->name}}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <p style="color:red;">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="duree">Tache</label>
                <select name="tache_id" class="form-control @error("description") border-danger @enderror">
                    <option value="none" selected disabled hidden>Choissir une tache</option>
                    @foreach($taches as $tache)
                    <option value="{{$tache->id}}">{{$tache->description}}</option>
                    @endforeach
                </select>
                @error('tache_id')
                    <p style="color:red;">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            <button type="submit" class="btn btn-success">+ Ajouter une activité</button>
        </form>
    </div>
@endsection

@section('title', 'ajouter une tache')
