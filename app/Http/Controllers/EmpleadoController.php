<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        
        return view('empleados.indexempleado')->with(['empleados' => $empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.createEmpleados');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request -> all());
        $empleado = new Empleado();
        $empleado->nomb_completo = $request->nomb_completo;
        $empleado->nomb_corto = $request->nomb_corto;
        $empleado->correo = $request->correo;
        $empleado->n_nomina = $request->n_nomina;
        $empleado->puesto = $request->puesto;
        $empleado->departamento = $request->departamento;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->save();

        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show-empleados',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.editEmpleados',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado->nomb_completo = $request->nomb_completo;
        $empleado->nomb_corto = $request->nomb_corto;
        $empleado->correo = $request->correo;
        $empleado->n_nomina = $request->n_nomina;
        $empleado->puesto = $request->puesto;
        $empleado->departamento = $request->departamento;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->save();

        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect('/empleado');
    }
}
