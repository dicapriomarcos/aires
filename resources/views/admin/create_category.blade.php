@extends('layouts.admin')

@section('admin-content')
<main class="p-4">
    <h3 class="text-center">{{{ isset($category) ? 'Editar Categoría' : 'Nueva Categoría' }}} </h3>
    <div class="row justify-content-center py-4">
        <div class="col-md-8">
            <form method="post" action="{{ route('store.category') }}">
                @csrf
                @if(isset($category))
                <input type="hidden" name="category_id" value="{{ $category->id }}">
                @endif
                <div class="form-group">
                    <label for="name">Nombre de la Categoría</label>
                    <input name="name" type="text" class="form-control" value="{{{ isset($category) ? $category->name : '' }}}" required>
                </div>
                <div class="custom-control custom-switch my-3">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status" {{ isset($category) && $category->status == 'active' ? 'checked' : '' }}>
                    <label class="custom-control-label" for="customSwitch1">Estado de la categoría</label>
                </div>
                <div class="buttons-container"><a class="mr-4 btn btn-info" href="{{ route('admin.categories')  }}"><i class="fas fa-undo-alt mr-2"></i>Volver</a><button type="submit" class="btn btn-success"><i class="fas fa-save mr-2"></i>{{{ isset($category) ? 'Guardar Categoría' : 'Crear Categoría' }}}</button></div>
            </form>  
        </div>
    </div>
</main>
@endsection