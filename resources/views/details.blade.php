@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
<h3>Votre Tache :</h3>
        <div class="col-md-8">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Durée</th>
                  <th>Etat</th>

                </tr>
                </thead>
                <tbody>
                @foreach($taches as $tach)
                 <tr>
        <td>{{$tach->description}}</td>
        <td>{{$tach->date}}</td>
        <td>{{$tach->duree}} Jour</td>
        <td>
            @if($tach->etat == "pas encore")
           <span style="background:rgba(255,0,0,0.1);color:red;padding:4px;">{{$tach->etat}}</span> 
            @elseif($tach->etat == "en cours")
            <span style="background:rgba(255,255,0,0.2);color:orange;padding:4px;">{{$tach->etat}}</span> 
            @elseif($tach->etat == "fini")
            <span style="background:rgba(0,255,0,0.1);color:green;padding:4px;">{{$tach->etat}}</span> 
            @endif
        </td>

                @endforeach

                </tbody>

              </table>
        </div>
    </div>

</div>
@endsection
