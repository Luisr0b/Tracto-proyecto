<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnicos = Tecnico::all();

        return view('tecnicos.indextecnico')->with(['tecnicos' => $tecnicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnicos.createTecnicos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tecnico = new Tecnico();
        $tecnico->nomb_completo = $request->nomb_completo;
        $tecnico->nomb_corto = $request->nomb_corto;
        $tecnico->save();

        return redirect('/tecnico');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function show(tecnico $tecnico)
    {
        return view('tecnicos.show-tecnicos',compact('tecnico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function edit(tecnico $tecnico)
    {
        return view('tecnicos.editTecnicos',compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tecnico $tecnico)
    {
        $tecnico = new Tecnico();
        $tecnico->nomb_completo = $request->nomb_completo;
        $tecnico->nomb_corto = $request->nomb_corto;
        $tecnico->save();

        return redirect('/tecnico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy(tecnico $tecnico)
    {
        $tecnico->delete();
        return redirect('/tecnico');
    }
}
