@extends('layouts.form')
@section('title','Registro')
@section('sub-title','Ingresa tus datos para Registrarte')

@section('content')
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <strong>
                                    Error!
                            </strong>
                            {{$errors->first()}}
                            </div>
                        @endif
                    <form action="{{ route('register') }}" method="POST" role="form">
                        @csrf                        
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ni ni-hat-3">
                                        </i>
                                    </span>
                                </div>
                                <input autocomplete="name" autofocus="" class="form-control" id="name" name="name"
                                    placeholder="Nombre" required="" type="text" value="{{ old('name') }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ni ni-hat-3">
                                        </i>
                                    </span>
                                </div>
                                <input autocomplete="rut" autofocus="" class="form-control" id="rut" name="rut"
                                    placeholder="Ingrese su Rut" required type="text" value="{{ old('rut') }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ni ni-email-83">
                                        </i>
                                    </span>
                                </div>
                                <input autocomplete="email" class="form-control" id="email" name="email"
                                    placeholder="Email" required type="email" value="{{ old('email') }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ni ni-lock-circle-open">
                                        </i>
                                    </span>
                                </div>
                                <input class="form-control" id="password" name="password" placeholder="Contraseña"
                                    required type="password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ni ni-lock-circle-open">
                                        </i>
                                    </span>
                                </div>
                                <input class="form-control" id="new-password" name="password_confirmation"
                                    placeholder="Confirmar Contraseña" required="" type="password"/>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-12">
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id="customCheckRegister" type="checkbox"/>
                                    <label class="custom-control-label" for="customCheckRegister">
                                        <span class="text-muted">
                                            I agree with the
                                            <a href="#!">
                                                Privacy Policy
                                            </a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary mt-4" type="submit">
                                Crear Cuenta
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection