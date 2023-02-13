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
                            <thead>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Contenido</th>
                                <th>Estado</th>
                                <th>Slug</th>
                                <th>Categoría</th>
                                <th>Autores</th>
                                {{--<th>Acción</th>--}}
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->content }}</td>
                                    <td>{{ $article->status }}</td>
                                    <td>{{ $article->slug }}</td>
                                    <td></td>
                                    <td></td>
                                    {{--<td></td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection