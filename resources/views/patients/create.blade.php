@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nuevo Paciente</h3>
            </div>
            <div class="col text-right">
                <a href="{{url('patients')}}" class="btn btn-sm btn-default">
                    Cancelar y volver
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <ul>
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </div>
        </ul>
        @endif
        <form action="{{url('patients')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre del paciente</label>
                <input type="text" name="name" id="" class="form-control" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail del paciente</label>
                <input type="email" name="email" id="" class="form-control" value="{{old('email')}}" required>
            </div>
            <div class="form-group">
                <label for="description">RUT del paciente</label>
                <input type="text" name="rut" id="" class="form-control" value="{{old('rut')}}" required>
            </div>
            <div class="form-group">
                <label for="address">Direccion del paciente</label>
                <input type="text" name="address" id="" class="form-control" value="{{old('address')}}" >
            </div>
            <div class="form-group">
                <label for="phone">Telefono del paciente</label>
                <input type="phone" name="phone" id="" class="form-control" value="{{old('phone')}}" required>
            </div>
            <div class="form-group">
                <label for="phone">Contraseña del paciente</label>
                <input type="text" name="password" id="" class="form-control" value="{{  Str::random(6) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
</div>
@endsection