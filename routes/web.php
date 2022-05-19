<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Primera ruta
Route::get('hola' , function(){
    echo "Hola 2465903";
});
//Ruta de arreglos
Route::get('arreglo' , function(){
    $estudiantes = [
        "CA" => 1,
        "JO" => true,
        "AN" => 1.78
    ];
    //Recorrer el arreglo
    foreach($estudiantes as $e){
        echo $e."<hr />";
    }
    //Agregar elementos en PHP
    $estudiantes["SE"] = "Sebastian";
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});
Route::get('Paises', function(){
    //Arreglo de paises
    $Paises = [
        "Colombia" => [
            "Capital"   => "Bogota",
            "Moneda"    => "Peso",
            "Poblacíon" => 51,
            "Ciudades"  => [
                "Medellin",
                "Cali",
                "Barranquilla"
            ]
        ],
        "Peru" => [
            "Capital"   => "Lima",
            "Moneda"    => "Sol",
            "Poblacíon" => 32,
            "Ciudades"  => [
                "Arequipa",
                "Trujillo",
                "Chiclayo"
            ]
        ],
        "Paraguay" => [
            "Capital"   => "Asuncíon",
            "Moneda"    => "Guaraní",
            "Poblacíon" => 7,
            "Ciudades"  => [
                "Luque",
                "San Lorenzo",
                "Ciudad del Este"
            ]
        ],
        "Argentina" => [
            "Capital"   => "Buenos aires",
            "Moneda"    => "Peso",
            "Poblacíon" => 45,
            "Ciudades"  => [
                "Córdoba",
                "Rosario",
                "Mar del Plata"
            ]
        ],
        "Ecuador" => [
            "Capital"   => "Quito",
            "Moneda"    => "Dolar",
            "Poblacíon" => 17,
            "Ciudades"  => [
                "Guayaquil",
                "Manta",
                "Machala"
            ]
        ]
    ];
    //Mostrar la vista
    return view('paises')
        ->with("Paises", $Paises);
});
//Crear rutas 
Route::get('prueba', function(){
    return view('productos.new');
});

//rutas rest - resource
Route::resource('producto' ,
        ProductoController::class);