<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va a ir el catalogo de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //selección de todoas las marcas
        $marcas = Marca::all();
        //selección de todas las categorias
        $categorias = Categoria::all();
        //mostrar la vista, 
        //con los marcas y categorias
        return view('productos.new')
                    ->with('marcas', $marcas)
                    ->with('categorias' , $categorias);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //1.establecer las reglas de validacion
        // que apliquen a cada campo
        $reglas = [
            "nombre"    => 'required|alpha',
            "desc"      => 'required|min:5|max:50',
            "precio"    => 'required|numeric',
            "marca"     => 'required',
            "categoria" =>  'required'
        ];

        //mensajes:
        $mensajes = [
            "required" => "Campo obligatorio",
            "alpha"    => "Solo letras"      ,
            "min"      => "Minimo de caracteres es 5",
            "max"      => "Maximo de caracteres es de 50",
            "numeric"  => "Solo numeros"
        ];

        //2. crear el objeto validador
        $v = Validator::make($r->all(),
                            $reglas,
                            $mensajes);

        //3. validar la input data
        if ($v->fails()) {
            //validacion fallida
            //redireccionar al formulario
            return redirect('producto/create')
                ->withErrors($v)
                ->withInput();
        }else{
            //validacion correcta
            //Crear nuevo producto
            $p = new Producto;
            //asignamos valores a los atributos
            //del producto
            $p->nombre = $r->nombre;
            $p->desc = $r->desc;
            $p->precio  = $r->precio;
            $p->marca_id = $r->marca;
            $p->categoria_id = $r->categoria;
             //guardar en base de datos
            $p->save();
            echo "Producto registrado";
            //redireccionar al formulario
            //con mensaje de exito()session
            return redirect('producto/create')
                ->with('mensajito', "Producto registrado");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        echo "aqui van los detalles de producto con id: $producto ";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        echo "aqui va a ir el formulario para actualizar el prod: $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
