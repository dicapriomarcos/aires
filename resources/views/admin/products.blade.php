@extends('layouts.admin')

@section('admin-content')
<main class="p-4">
    <h3 class="text-center">Administrar Productos</h3>
    <div class="row justify-content-center py-4">
        @if(isset($categories) && count($categories) > 0 )
        <div class="col-md-12">
            <div class="row">

                @foreach($categories as $category)
                <h5 class="py-4">{{ $category->name}}</h5>
                <table class="table-sm table-striped">
                    <thead class="bg-dark text-light">
                        <th scope="col">#</th>
                        <th scope="col">Nombre del Producto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col" class="min-width">Precio</th>
                        <th scope="col" class="min-width">Oferta</th>
                        <th scope="col" class="min-width text-center">Estado</th>
                        <th scope="col" class="min-width">Acciones</th>
                    </thead>
                    <tbody>
                        @foreach($category->products as $product)
                        <tr>
                            <td>{{{ $product->id }}}</td>
                            <td>{{{ $product->name }}}</td>
                            <td class="description">{!! nl2br(e($product->description)) !!}</td>
                            <td>{{{ number_format($product->price, 2) }}}</td>
                            <td>{{{ $product->price2 }}}</td>
                            <td class="text-center min-width">{!! $product->state == 'active' ? '<span class="badge badge-success">Activo</span>' : '<span class="badge badge-danger">No disponible</span>' !!}</td>
                            <td class="min-width"><a class="ml-auto btn btn-warning btn-sm"
                                    href="{{ route('create.product', $product->id) }}"><i
                                        class="fas fa-edit mr-2"></i>Editar</a>
                                <a class="btn btn-danger text-light btn-sm" data-toggle="modal"
                                    data-target="#deletePro{{$product->id}}"><i
                                        class="fas fa-trash-alt mr-2"></i>Eliminar</a>
                                <div class="modal fade" id="deletePro{{$product->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¿Eliminar Producto?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Esta acción Eliminará el Producto {{ $product->name }} y no se podrá
                                                    recuperar</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-info" data-dismiss="modal">Cerrar
                                                </button>
                                                <form method="post" action="{{ route('delete.product')}}">
                                                    <fieldset>
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                        <button type="submit" class=" btn btn-danger">Si,
                                                            Eliminar</button>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach <!-- END FOREACH PRODUCTS -->
                    </tbody>
                </table>
                @endforeach <!-- END FOREACH CATEGORIES -->
            </div>
        </div>
        @else
        <div class="col-md-8">
            <h4 class="text-center">No hay Productos</h4>
        </div>
        @endif
        <div class="py-4"><a class="btn btn-success" href="{{ route('create.product') }}">Crear Nuevo Producto</a>
        </div>
        <div class="col-md-offset-2">
        </div>
    </div>
</main>
@endsection