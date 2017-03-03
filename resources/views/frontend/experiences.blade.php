@extends('frontend.layout')
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <form class="form-orderby" action="{{ route('frontend.experiences.orderby')}}"
                  method="post">{{ csrf_field() }}
                <div class="form-group">
                    <select name="order" id="order" class="form-control">
                        <option value="select" selected disabled>Selecciona una opcion</option>
                        <option value="id">Id</option>
                        <option value="puntuation">Puntación</option>
                        <option value="created_at">Ultimos</option>
                    </select>
                </div>
                {{-- Este input oculto sive para que laravel pueda validar el formulario --}}
                <input type="hidden" name="_csrf_token" value="{{csrf_token()}}">
            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Breve descripción</th>
                    <th>Lugar</th>
                    <th>Valoración</th>
                    <th>Detalles</th>
                    <th>Like</th>
                </tr>
                </thead>
                <tbody>
                @foreach($experiences as $experience)
                    <tr>
                        <td>{{ $experience->id }}</td>
                        <td>{{ $experience->description_birev }}</td>
                        <td>{{ $experience->location_id }}</td>
                        <td>{{ $experience->puntuation }}</td>
                        <td>
                            <a href="#" onclick="getComments({{ $experience->id }})"><i class="fa fa-eye"></i></a>
                        </td>
                        <td>
                            <a href="{{ route('experience.likeup', $experience->id) }}"><i class="fa fa-hand-o-up"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $experiences->links() }}
        </div>
        <a href="{{ route('frontend.experiences.create') }}" class="btn btn-default">Añade una experiencia</a>
    </div>
@endsection