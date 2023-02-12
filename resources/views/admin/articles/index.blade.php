@extends('layouts.app')

@section('title', 'Lista de Artículos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Lista de Artículos') }}</div>

                    <div class="card-body">
                        <a href="{{ route('articles.create') }}" class="btn btn-info">Registrar Nuevo Artículo</a>
                        <table class="table table-striped">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection