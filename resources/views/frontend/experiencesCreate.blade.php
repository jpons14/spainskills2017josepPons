@extends('frontend.layout')
@section('content')
    <div class="container">
        <div class="col-md-10">
            <form action="{{ route('frontend.experiences.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <select name="locations" id="location" class="form-control">
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Foto" name="photo_id"/> {{-- Para implementar--}}
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Descripcion corta" name="description_birev"/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description_long" id="description_long"
                              placeholder="Descripción larga" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Tipo establecimiento"
                           name="type_establishment"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="URL De un vidio de youtube"
                           name="youtube_video"/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Crea experiencia" class="btn btn-default"/>
                </div>
            </form>
        </div>
    </div>
@endsection