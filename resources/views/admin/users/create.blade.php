@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Creación de Usuario') }}</div>

                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputName" class="col-sm-5 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="inputName" autocomplete="off" name="name" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputEmail" class="col-sm-5 col-form-label">Correo Electrónico</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" id="inputEmail" autocomplete="off" name="email" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" id="inputPassword" name="password" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input class="btn btn-success" type="submit" value="Registrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection