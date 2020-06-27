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
        <a class="nav-link" href="{{ route('etudiant.index') }}">{{ __('Liste des etudiants') }}</a>
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
                        <div class="col-sm-6 col-md-6">
                            @if(Auth::user()->encadrant->img != NULL)
                                <img src="/{{Auth::user()->encadrant->img}}" class="img-thumbnail rounded-circle" alt="profile" style="width: 250px; height: 250px;">
                            @else
                                <img src="/images/avatar_2x.png" class="rounded-circle" alt="profile">
                            @endif   
                        </div>

                        <div class="col-sm-6 col-md-6" style="padding-top: 10px;">
                            <h4>{{ Auth::user()->encadrant->prenom}} {{ Auth::user()->encadrant->nom}}</h4>
                            <div>
                                <i class="glyphicon glyphicon-map-marker"></i>Adresse: {{ Auth::user()->encadrant->adresse}}<br>
                            </div>

                            <div>
                                <i class="glyphicon glyphicon-envelope"></i>Email: {{ Auth::user()->email}}
                            </div>
                             <div> <i class="glyphicon glyphicon-earphone"></i>Telephone: {{ Auth::user()->encadrant->telephone}}</div><br><br>
                        <div><a href="{{ route('encadrant.edit',[Auth::user()->encadrant->id]) }}" class="btn btn-info pull-right">Modifier</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
