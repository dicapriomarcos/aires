@extends('layouts.admin')

@section('admin-content')
<main class="p-4">
    <h3 class="text-center">{{{ isset($product) ? 'Editar Producto' : 'Nuevo Producto' }}} </h3>
    <div class="row justify-content-center py-4">
        <div class="col-md-8">
            <form method="post" action="{{ route('store.product') }}">
                @csrf
                @if(isset($product))
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                @endif
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input name="name" type="text" class="form-control"
                        value="{{{ isset($product->name) ? $product->name : '' }}}" required>
                </div>

                <div class="form-group">
                    <label for="category">Categoría</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if( isset($product) && $product->category_id == $category->id) selected
                            @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Descripcion</label>
                    <textarea row="7" id="description" name="description" type="text" class="form-control" required>{{ $product->description ?? ''}}
                    </textarea>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="price">Precio Normal</label>
                        <input type="text" class="form-control" name="price" maxlength="6"
                            style="text-align: right; width: 100px" value="{{ $product->price ?? '' }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price2">Precio de Oferta</label>
                        <input type="text" class="form-control" name="price2" maxlength="6"
                            style="text-align: right; width: 100px" value="{{ $product->price2 ?? '' }}">
                    </div>
                </div>
                <div class="custom-control custom-switch my-3">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="state" {{ isset($product) && $product->state == 'active' ? 'checked' : '' }}>
                    <label class="custom-control-label" for="customSwitch1">Estado Del Producto</label>
                </div>

                <div class="buttons-container"><a class="mr-4 btn btn-info" href="{{ route('admin.products')  }}"><i
                            class="fas fa-undo-alt mr-2"></i>Volver</a><button type="submit" class="btn btn-success"><i
                            class="fas fa-save mr-2"></i>{{ isset($product) ? 'Guardar producto' : 'Crear Producto' }}</button>
                </div>
            </form>

        </div>
    </div>
</main>
@endsection