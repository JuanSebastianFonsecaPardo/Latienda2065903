@extends('layouts.menu')
@section('contenido')

@section('contenido')
@if( session('mensajito'))
<br><br><br>
    <div class="row">
        <span class=" light-green-text text-accent-3">{{ session('mensajito') }}</span>
    </div>
@endif
<div class="row">
  <h1 class=" blue-text text-darken-2">Registrar Producto</h1>    
</div>
<div class="row">
    <form method="POST" action="{{ route('producto.store') }}" class="col s8" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col s8">
                <i class="material-icons prefix">person_add</i>
                <input placeholder="Nombre del producto" id="nombre" name="nombre" type="text" value="{{ old('nombre') }}">
                <label for="nombre">Nombre producto</label>
                <span class=" red-text text-accent-4"> {{ $errors->first('nombre') }} </span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <i class="material-icons prefix">description</i>
                <textarea name="desc" id="desc" cols="30" class="materialize-textarea">{{ old('desc') }}</textarea>
                <label for="desc">Descripcpion</label>
                <span class=" red-text text-accent-4"> {{ $errors->first('desc') }} </span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <i class="material-icons prefix">attach_money</i>
                <input id="precio" type="text" placeholder="Precio del Producto" name="precio" value="{{ old('precio') }}">
                <label for="icon_prefix">Precio</label>
                <span class=" red-text text-accent-4"> {{ $errors->first('precio') }} </span>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
            <i class="material-icons prefix ">view_list</i>
                <select name="marca" id="marca">
                    <option value="">Elija una marca</option>
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}">
                            {{ $marca->nombre }}
                        </option>
                    @endforeach
                </select>
                <label for="marca">
                    Elija Marca
                </label>
                <span class=" red-text text-accent-4"> {{ $errors->first('marca') }} </span>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
            <i class="material-icons prefix">format_list_numbered</i>
                <select name="categoria" id="categoria" value="{{ old('categoria ') }}">
                    <option value="">Elija una categoria</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
                <label for="categoria">
                    Elija la categoria
                </label>
                <span class=" red-text text-accent-4"> {{ $errors->first('categoria') }} </span>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-filed col s8">
                <div class="btn blue darken-4">
                    <span ><i class="material-icons prefix blue darken-4">file_upload</i></span>
                    <input type="file" multiple class="blue darken-4" name="imagen" id="imagen">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate"  type="text" placeholder="Imagenes del producto">
                </div>
                <span class=" red-text text-accent-4">{{ $errors->first('imagen') }}</span>
            </div>
        </div>
        <button class="btn blue darken-4" type="submit" name="action">Registrar
            <i class="material-icons right">send</i>
        </button>        
    </form>
</div>
@endsection