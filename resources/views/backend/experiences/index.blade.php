@extends('backend.layout')
@section('content')
    <div class="col-md-10">
        <div class="container">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>User-id</th>
                    <th>DescripcionCorta</th>
                    <th>Puntuacion</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($experiencies as $experiency)
                    <tr>
                        <td>{{ $experiency->user_id }}</td>
                        <td>{{ $experiency->description_birev }}</td>
                        <td>{{ $experiency->puntuation }}</td>
                        <td><a href="#"><i class="fa fa-eye"></i></a></td>
                        <td><a href="#"><i class="fa fa-times"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-default" href="{{ route('experiences.create') }}">Crear Experiencia</a>
        </div>
    </div>
@endsection