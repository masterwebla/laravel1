<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    //Función para listar o mostrar los productos
    public function listar(){
    	$productos = Producto::all();   //SELECT * FROM productos;
    	return view('productos.index',compact('productos'));
    }

    //Función para abrir una vista con un formulario para crear un producto
    public function crearProducto(){
    	return view('productos.crear');
    }

    //Función para guardar un producto
    public function guardarProducto(Request $request){
        //Validación de campos
        $request->validate([
            'nombre' => 'required|unique:productos|max:100',
            'precio' => 'required|numeric',
            'vencimiento' => 'required|date'
        ]);

    	Producto::create([		//INSERT INTO productos (nombre,precio,vencimiento) VALUES('')
    		'nombre'=>$request->nombre,
    		'precio'=>$request->precio,
    		'vencimiento'=>$request->vencimiento
    	]);

    	return redirect()->route('listar');
    }

    //Función para mostrar la vista con el formulario del producto que vamos a editar
    public function editarProducto($id){
    	$producto = Producto::find($id);  //SELECT * FROM productos WHERE id=$id
    	return view('productos.editar',compact('producto'));
    }

    //Función para actualizar
    public function actualizarProducto(Request $request,$id){
    	$producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->vencimiento = $request->vencimiento;
        $producto->save();

        return redirect()->route('listar');

    }

    //Función para borrar un producto
    public function eliminarProducto($id){
        $producto = Producto::find($id);
        $producto->delete();

        return redirect()->route('listar');
    }
}
