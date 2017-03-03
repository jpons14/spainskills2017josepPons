@extends('backend.layout')
@section('content')
    {{-- Lista las experiencasi --}}
    @foreach($experiences as $experience)
        <div class="container">
            <div class="jumbotron grande ">
                <strong>Usuario: </strong> {{ $experiences[0]->user->name }}
                <strong>Descripción: </strong> {{ $experience->description_long }} <br/>
                <strong>Tipo de espablecimiento: </strong> {{ $experience->type_establishment }}<br/>
                <strong>youtube</strong> {{ $experience->youtube_video }}<br/>
                <strong>puntuación</strong> {{ $experience->puntuation }}<br/>
            </div>
        </div>
    @endforeach
@endsection