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
                   {!! Form::model($profile,['route'=>['encadrant.update',$profile->id],'method'=>'PUT','files'=>'true']) !!}
                   <div class="row">
                        <div class="col-sm-6 col-md-4">
                             @if($profile->img != NULL)
                                <img src="/{{$profile->img}}" class="img-thumbnail rounded-circle" alt="profile" style="width: 200px; height: 200px;">
                            @else
                                <img src="/images/avatar_2x.png" class="rounded-circle" alt="profile">
                            @endif   
                            {!! Form::file('img') !!}
                        </div>
                    <div class="col-sm-6 col-md-8">
                    
                        <div class="form-group row">
                            <!-- <label for="prenom" class="col-md-4 col-form-label text-md-right">Prenom</label> -->
                            {!! Form::label('prenom','prenom',['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="{{ $errors->has('prenom')? 'has-error':'' }}">
                            {!! Form::text('prenom',null,['class'=>'form-control','autofocus'=>'autofocus']) !!}
                            {!! $errors->first('prenom','<small class="help-block">:message</small>') !!}
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <!-- <label for="prenom" class="col-md-4 col-form-label text-md-right">Prenom</label> -->
                            {!! Form::label('nom','nom',['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="{{ $errors->has('nom')? 'has-error':'' }}">
                            {!! Form::text('nom',null,['class'=>'form-control']) !!}
                             {!! $errors->first('prenom','<small class="help-block">:message</small>') !!}
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            {!! Form::label('adresse','adresse',['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="{{ $errors->has('adresse')? 'has-error':'' }}">
                            {!! Form::text('adresse',null,['class'=>'form-control']) !!}
                             {!! $errors->first('adresse','<small class="help-block">:message</small>') !!}
                            </div>
                            
                        </div>
                         <div class="form-group row">
                            {!! Form::label('telephone','telephone',['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="{{ $errors->has('telephone')? 'has-error':'' }}">
                            {!! Form::text('telephone',null,['class'=>'form-control']) !!}
                             {!! $errors->first('telephone','<small class="help-block">:message</small>') !!}
                            </div>
                            
                        </div><br>
                        {!! Form::submit('Sauvegarder',['class'=>'btn btn-info']) !!}
                    </div>
                   </div>
                    {!! Form::close() !!}
                    <a href="javascript:history.back()" class="btn btn-info">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
