@extends('layouts.app')

@section('title', 'Crear Categoría')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Creación de Categoría') }}</div>

                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-5 col-form-label">Nombre Categoría</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="name" name="name" autocomplete="off" required>
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