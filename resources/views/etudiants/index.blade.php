@extends('layouts.app')

@section('home')
encadrant
@endsection
@section('title')
    Encadrant
@endsection

@section('menu')
    <li class="nav-item">
        <a class="nav-link" href="">{{ __('FAQ') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">{{ __('Liste des etudiants') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">{{ __('planning conduite') }}</a>
    </li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in!
                    <p>Bienvenue cher encadrant</p> -->
                    <div class="row">
                        @foreach($etudiants as $etudiant)
                        <div class="col-sm-6 col-md-4">
                            @if($etudiant->img != NULL)
                                <img src="/{{Auth::user()->encadrant->img}}" class="img-thumbnail rounded-circle" alt="profile" style="width: 250px; height: 250px;">
                            @else
                                <img src="/images/avatar_2x.png" class="rounded-circle" alt="profile">
                            @endif   
                        </div>
                        <div class="col-sm-6 col-md-6" style="padding-top: 50px;">
                            <h4>{{ $etudiant->prenom}} {{ $etudiant->nom}}</h4>
                            <div>
                                <i class="glyphicon glyphicon-map-marker"></i>Adresse: {{ $etudiant->adresse}}<br>
                            </div>

                            <div>
                                <i class="glyphicon glyphicon-envelope"></i>Email: {{ $etudiant->user->email}}
                            </div>
                             <div> <i class="glyphicon glyphicon-earphone"></i>Telephone: {{ $etudiant->telephone}}</div><br><br>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
                        {!! $links !!}
        </div>
    </div>
</div>
@endsection
