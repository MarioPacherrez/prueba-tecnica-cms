@extends('layouts.app')

@section('title', 'Lista de Imágenes')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Lista de Imágenes') }}</div>

                    <div class="card-body">
                        <div class="row">
                            @foreach($images as $image)
                                <div class="pane">

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection