@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nueva Especialidad</h3>
            </div>
            <div class="col text-right">
                <a href="{{route('Specialty')}}" class="btn btn-sm btn-default">
                    Cancelar y volver
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors -> any())
        <ul>
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $errors)
                <li>{{$errors}}</li>
                @endforeach
            </div>
        </ul>
        @endif
        <form action="{{url('specialties')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre de la Especialidad</label>
                <input type="text" name="name" id="" class="form-control" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
                <label for="description">Descripcion de la Especialidad</label>
                <input type="text" name="description" id="" class="form-control" value="{{old('description')}}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
</div>
@endsection