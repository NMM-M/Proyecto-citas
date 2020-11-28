@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Médico</h3>
            </div>
            <div class="col text-right">
                <a href="{{url('doctors', $doctor)}}" class="btn btn-sm btn-default">
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
        <form action="{{url('doctors/'.$doctor->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre del médico</label>
                <input type="text" name="name" id="" class="form-control" value="{{old('name', $doctor->name)}}" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail del médico</label>
                <input type="email" name="email" id="" class="form-control" value="{{old('email', $doctor->email)}}" required>
            </div>
            <div class="form-group">
                <label for="description">RUT del médico</label>
                <input type="text" name="rut" id="" class="form-control" value="{{old('rut', $doctor->rut)}}" required>
            </div>
            <div class="form-group">
                <label for="address">Direccion del médico</label>
                <input type="text" name="address" id="" class="form-control" value="{{old('address', $doctor->address)}}" >
            </div>
            <div class="form-group">
                <label for="phone">Telefono del médico</label>
                <input type="phone" name="phone" id="" class="form-control" value="{{old('phone', $doctor->phone)}}" required>
            </div>
            <div class="form-group">
                <label for="phone">Contraseña del médico </label>
                <input type="text" name="password" id="" class="form-control" value="" >
                <p>Ingrese un valor sólo si desea modificar la contraseña</p>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
</div>
@endsection