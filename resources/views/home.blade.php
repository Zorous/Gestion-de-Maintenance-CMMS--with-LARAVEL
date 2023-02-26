@extends('layouts.app')

@section('content')
@php
use Illuminate\Support\Facades\DB;
$activite
@endphp


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Espace Technicien :
                    {{ Auth::user()->id }}
                </h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
