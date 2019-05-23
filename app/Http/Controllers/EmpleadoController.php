<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{

    //Función para listar los empleados (GET)
    public function index()
    {
        $empleados = Empleado::paginate(5);  //SELECT * FROM empleados;
        //return $empleados;
        return view('empleados.index',compact('empleados'));
    }

    //Función para mostrar el formulario para crear nuevo empleado (GET)
    public function create()
    {
        return view('empleados.crear');
    }

    //Función para guardar la información del nuevo empleado (POST) 
    public function store(Request $request)
    {
        //Validación
        $request->validate([
            'nombres'=>'required|unique:empleados|max:100',
            'cedula'=>'required',
            'salario'=>'required',
            'nacimiento'=>'required|date',
        ]);
        //Insertar
        Empleado::create([
            'nombres'=>$request->nombres,
            'cedula'=>$request->cedula,
            'salario'=>$request->salario,
            'nacimiento'=>$request->nacimiento
        ]);

        return redirect()->route('empleados.index');

    }


    //Función que me muestra el formulario para editar un empleado (GET)
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('empleados.editar',compact('empleado'));
    }

    //Función para actualizar datos de un empleado
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        $empleado->nombres = $request->nombres;
        $empleado->cedula = $request->cedula;
        $empleado->salario = $request->salario;
        $empleado->nacimiento = $request->nacimiento;
        $empleado->save();

        return redirect()->route('empleados.index');

    }

    //Función para eliminar un empleado
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();

        return redirect()->route('empleados.index');
    }
}
