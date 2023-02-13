@extends('layouts.app')

@section('title', 'Crear Artículo')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Creación de Artículo') }}</div>

                    <div class="card-body">
                        {{--<form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">--}}
                        {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}
                            @csrf
                            <div class="mb-3 row">
                                <label for="title" class="col-sm-5 col-form-label">Título</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="title" autocomplete="off" name="title">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="content" class="col-sm-5 col-form-label">Contenido</label>
                                <div class="col-sm-7">
                                    <textarea name="content" id="content" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="image" class="col-sm-5 col-form-label">Imágen</label>
                                <div class="col-sm-7">
                                    <input type="file" name="image" id="image">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="categories" class="col-sm-5 col-form-label">Categorías</label>
                                <div class="col-sm-7">
                                    {!! Form::select('categories[]', $categories, null, ['class' => 'form-control', 'multiple', 'required', 'style' => 'height:150px']) !!}
                                </div>
                            </div>
                            <div class="mb-3">
                                <input class="btn btn-success" type="submit" value="Registrar">
                            </div>
                        {!! Form::close() !!}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection