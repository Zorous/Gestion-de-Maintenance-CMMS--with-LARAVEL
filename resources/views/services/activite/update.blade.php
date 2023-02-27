@extends('layouts.services-layout');


@section('content')
    <div class="container mt-5 p-5" style="margin-left:10vw;">
        <form action="{{ route('activites.update',$id) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control @error('description') border-danger @enderror"
                    name="description" value="{{$activite->description}}"
                    id="description">
                @error('description')
                    <p style="color:red;">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" value="{{$activite->date}}" class="form-control @error('date') border-danger @enderror" name="date"
                    id="date">
                @error('date')
                    <p style="color:red;">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="duree">Durée</label>
                <input type="number" value="{{$activite->duree}}" class="form-control @error("duree") border-danger @enderror" name="duree" id="duree">
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
                    @foreach($techniciens as $tech)
                    <option value="{{$tech->id}}" @if($tech->id === $technicien->id) selected @endif>{{$tech->name}}</option>
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
                    <option value="{{$tache->id}}" @if($activite->tache_id === $tache->id) selected @endif>{{$tache->description}}</option>
                    @endforeach
                </select>
                @error('tache_id')
                    <p style="color:red;">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="duree">Etat</label>
                <select name="etat_id" class="form-control @error("description") border-danger @enderror">
                    @foreach($etats as $etat)
                    <option value="{{$etat->id}}" >{{$etat->etat}}</option>
                    @endforeach
                </select>
                @error('etat_id')
                    <p style="color:red;">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            <button type="submit" class="btn btn-success">Modifier cette Activités</button>
        </form>
    </div>
@endsection

@section('title', 'ajouter une tache')
