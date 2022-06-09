@extends('layouts.menu')
@section('contenido')
<div class="row">
    <blockquote><h1 class="h1-sena-prueba">{{ $producto->marca->nombre }} {{ $producto->nombre }}</h1></blockquote>
</div>
<div class="row">
    <div class="col s8">
        <div class="row">
            <img width="600px" height="400px" @if($producto->imagen === null) src="{{ asset('img/nofunciona.png') }}" @else src="{{ asset('img/'.$producto->imagen) }}" @endif>
        </div>
        <div class="row">
            <ul class="collection">
                <li class="collection-item avatar">
                    <blockquote>
                        <i class="material-icons circle blue darken-4">description</i>
                        <span class="title">Descripcion:</span>
                        <p>{{ $producto->desc }}</p>
                        <a class="secondary-content "><i class="material-icons">grade</i></a>
                    </blockquote>
                </li>
                <li class="collection-item avatar">
                    <blockquote>
                        <i class="material-icons circle blue darken-4">monetization_on</i>
                        <span class="title">Precio:</span>
                        <p>{{ $producto->precio }}</p>
                        <a class="secondary-content"><i class="material-icons">grade</i></a>
                    </blockquote>
                </li>
                <li class="collection-item avatar">
                    <blockquote>
                        <i class="material-icons circle blue darken-4">menu</i>
                        <span class="title">Marca:</span>
                        <p>{{ $producto->marca->nombre }}</p>
                        <a class="secondary-content"><i class="material-icons">grade</i></a>
                    </blockquote>
                </li>
                <li class="collection-item avatar">
                    <blockquote>
                        <i class="material-icons circle blue darken-4">directions_car</i>
                        <span class="title">Categoria:</span>
                        <p>{{ $producto->categoria->nombre }}</p>
                        <a class="secondary-content"><i class="material-icons">grade</i></a>
                </blockquote>
                </li>
            </ul>
        </div>
    </div>
    <div class="col s4">
        <form method="POST" action="{{ route('carrito.store') }}">
            @csrf
            <div class="row">
                <h3 class="h1-sena-prueba">Añadir al carrito</h3>
                <div class="row">
                    <div class="col s4 input-field">
                        <select name="cantidad" id="cantidad">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label for="cantidad">Seleccione la cantidad</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <button class="btn blue darken-4" type="submit" name="action">Añadir<i class="material-icons"> add_shopping_cart</i></button> 
                    </div>
                </div>
                <input type="hidden" name="prod_id" value="{{ $producto->id }}">
                <input type="hidden" name="prod_name" value="{{ $producto->nombre }}">
            </div>
        </form>
    </div>
</div>
@endsection