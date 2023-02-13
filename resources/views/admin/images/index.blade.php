@extends('layouts.app')

@section('title', 'Lista de Imágenes')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">{{ __('Lista de Imágenes') }}</div>

                    <div class="card-body">
                        @foreach($images as $image)
                            <div class="col-md-6">
                                <h5 class="card-title">{{ 'Nombre de la Imágen:'.$image->name }}</h5>
                                <div>
                                    <img src="/photos/articles/{{ $image->name }}" class="img-fluid">
                                </div>
                                <br>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection