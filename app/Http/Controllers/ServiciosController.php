<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ServiciosController extends Controller
{
    //Función para listar
    public function index()
    {
        $servicios = Servicio::paginate(2);   //SELECT * FROM servicios;
        return view('servicios.index',compact('servicios'));
    }

    //Función para el formulario de crear
    public function create()
    {
        return view('servicios.crear');
    }

    //Función para insertar
    public function store(Request $request)
    {
        //Validación de campos
        $request->validate([
            'nombre' => 'required|unique:servicios|max:100',
            'descripcion' => 'required'
        ]);

        //Insertar datos
        Servicio::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion
        ]);

        return redirect()->route('servicios.index');
    }

    //Función para mostrar más info de un registro
    public function show($id)
    {
        //
    }

    //Función para desplegar el formulario de edición
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.editar',compact('servicio'));
    }

    //Función para actualizar
    public function update(Request $request, $id)
    {
        //Validación de campos
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required'
        ]);

        $servicio = Servicio::find($id);
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->save();

        return redirect()->route('servicios.index');
    }

    //Función para borrar
    public function destroy($id)
    {
        $servicio = Servicio::find($id);
        $servicio->delete();

        return redirect()->route('servicios.index');
    }
}
