@extends('layouts.menu')
@section('contenido')
    <div class="row">
        <h1>Catalogo de productos</h1>
    </div>
    @foreach($productos as $producto)
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
            <img class="activator"
                width="500px"  
                height="500px"
                @if($producto->imagen === null)
                    src="{{ asset('img/nofunciona.png') }}"
                @else 
                    src="{{ asset('img/'.$producto->imagen) }}"
                @endif
            />
            </div>
            <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">{{ $producto->nombre }}<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Ver Detalles...</a></p>
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">{{ $producto->nombre }} <i class="material-icons right">close</i></span>
                <ul>
                    <li>Descripcion: {{ $producto->desc }}</li>
                    <li>Precio: {{ $producto->precio }}</li>
                    <li>Categoria {{ $producto->categoria()->get()->nombre }}</li>
                </ul>
            </div>
        </div>
    @endforeach
@endsection