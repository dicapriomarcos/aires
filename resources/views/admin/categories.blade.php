@extends('layouts.admin')

@section('admin-content')
<main class="p-4">
    <h3 class="text-center">Administrar categorias</h3>
    <div class="row justify-content-center py-4">
        @if(isset($categories))
        <div class="col-md-12">
            <div class="row">
                <table class="table-sm table-striped">
                    <thead class="bg-dark text-light">
                        <th scope="col">#</th>
                        <th scope="col">Nombre de la Categoría</th>
                        <th scope="col" class="min-width">Acciones</th>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="min-width"><a class="ml-auto btn btn-warning btn-sm"
                                    href="{{ route('create.category', $category->id) }}"><i
                                        class="fas fa-edit mr-2"></i>Editar</a>
                                <a class="btn btn-danger text-light btn-sm" data-toggle="modal"
                                    data-target="#deleteCat{{$category->id}}"><i
                                        class="fas fa-trash-alt mr-2"></i>Eliminar</a>
                                        <div class="modal fade" id="deleteCat{{$category->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Eliminar Categoría?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Esta acción Eliminará la Categoría {{ $category->name }} y no se podrá
                                            recuperar</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-info" data-dismiss="modal">Cerrar
</button>
                                        <form method="post" action="{{ route('delete.category') }}">
                                            <fieldset>
                                                @csrf
                                                <input type="hidden" name="category_id"
                                                value="{{$category->id}}">
                                                <button type="submit" class=" btn btn-danger">Si, Eliminar</button>
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div class="col-md-8">
            <h4 class="text-center">No hay Categorías</h4>
        </div>
        @endif
        <div class="py-4"><a class="btn btn-success" href="{{ route('create.category') }}">Crear Nueva Categoría</a>
        </div>
        <div class="col-md-offset-2">
        </div>
    </div>
</main>
@endsection