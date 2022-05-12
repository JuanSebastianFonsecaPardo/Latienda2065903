@extends('layouts.menu')
@section('contenido')
<div class="row">
  <h1 class=" blue-text text-darken-2">Registrar Producto</h1>    
</div>
<div class="row">
    <form class="col s8">
        <div class="row">
            <div class="input-field col s8">
                <i class="material-icons prefix">person_add</i>
                <input placeholder="Nombre del producto" id="nombre" name="nombre" type="text">
                <label for="nombre">Nombre producto</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <i class="material-icons prefix">description</i>
                <textarea name="descripcion" id="descripcion" cols="30" class="materialize-textarea"></textarea>
                <label for="desc">Descripcpion</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <i class="material-icons prefix">attach_money</i>
                <input id="precio" type="text" placeholder="Precio del Producto" name="precio">
                <label for="icon_prefix">Precio</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-filed col s8">
                <div class="btn">
                    <span><i class="material-icons prefix">file_upload</i></span>
                    <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Imagenes del producto">
                </div>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
            <i class="material-icons right">send</i>
        </button>        
    </form>
</div>
@endsection