@extends('layouts.menu')
@section('contenido')
    <div class="row">
        <h1><blockquote>Catalogo de productos</blockquote></h1>
    </div>
    @foreach($productos as $producto)
<div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
        <img class="activator"
                width="500px"  
                height="300px"
                @if($producto->imagen === null)
                    src="{{ asset('img/nofunciona.png') }}"
                @else 
                    src="{{ asset('img/'.$producto->imagen) }}"
                @endif
            />
          <span class="card-title">{{ $producto->nombre }}</span>
          <a class="btn-floating halfway-fab waves-effect waves-light blue darken-4 btn-large pulse" href="{{ url('producto/'.$producto->id) }}"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
            <ul>
                <li>Descripcion: {{ $producto->desc }}</li>
                <li>Precio: {{ $producto->precio }}</li> 
                <li>Categoria: {{ $producto->categoria->nombre }}</li>
                <li>Marca:  {{ $producto->marca->nombre }}</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
    @endforeach
@endsection