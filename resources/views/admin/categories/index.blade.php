@extends('layouts.app')

@section('title', 'Lista de Categorías')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Lista de Categorías') }}</div>

                    <div class="card-body">
                        <a href="{{ route('categories.create') }}" class="btn btn-info">Registrar Nueva Categoría</a>
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                {{--<th>Acción</th>--}}
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    {{--<td></td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {!! $categories->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection