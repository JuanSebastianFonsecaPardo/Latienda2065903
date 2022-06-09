@extends('layouts.menu')
@section('contenido')
@if(!session('cart'))
    <p>Variable no existente</p>
@else
    <div class="row">
        <li>{{ session('cart')["name"] }}</li>
        <li>{{ session('cart')["cantidad"] }}</li>
    </div>
    <form action="{{ route('carrito.destroy', 1 ) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn waves-effect waves-light blue darken-4" type="submit" name="action">Eliminar<i class="material-icons right">send</i></button>
    </form>
@endif
@endsection