@extends('layouts.app')

@section('content')
    @php
        use Illuminate\Support\Facades\DB;
        $technicien = DB::table('techniciens')
                                ->where('user_id', '=', Auth::user()->id)
                                ->first();
                            // dd($technicien);
                            if ($technicien) {
                                $activites = DB::table('activites')
                                    ->where('technicien_id', '=', $technicien->id)
                                    ->get();
                                // dd($activites);
                            } else {
                                $activites=[];
                                $message = "vous n'êtes intégré à aucune activité pour l'instant";
                            }
    @endphp


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Espace Technicien :
                            {{-- {{ Auth::user()->id }} --}}
                        </h1>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>Bienvenu {{ Auth::user()->name }}!</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="container">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Durée</th>
                            <th>Détails</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activites as $act)
                            <tr>
                                <td>{{ $act->description }}</td>
                                <td>{{ $act->date }}</td>
                                <td>{{ $act->duree }}</td>
                                <td><a href="{{ route('activite.details', $act->technicien_id) }}">Voir les détails</a></td>
                        @endforeach



                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
