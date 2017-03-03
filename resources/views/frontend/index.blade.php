@extends('frontend.layout')
@section('content')
     {{-- Lista todas las experiencias--}}
    @foreach($experiences as $experience)
        <div class="container">
            <div class="jumbotron grande ">
                <strong>Usuario: </strong> {{ $experience->user->name }}
                <strong>Descripción: </strong> {{ $experience->description_long }} <br/>
                <strong>Tipo de espablecimiento: </strong> {{ $experience->type_establishment }}<br/>
                <strong>youtube</strong> {{ $experience->youtube_video }}<br/>
                <strong>puntuación</strong> {{ $experience->puntuation }}<br/>
            </div>
        </div>
    @endforeach
@endsection