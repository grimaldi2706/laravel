<?php

namespace App\Http\Controllers;

use App\Models\tareas_diarias;
use Illuminate\Http\Request;

class TareasDiariasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listar = tareas_diarias::all();
        //$listar = tareas_diarias::orderBy('nombre_tarea')->simplePaginate(1);
        return view('task', compact('listar')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tareas_diarias  $tareas_diarias
     * @return \Illuminate\Http\Response
     */
    public function show(tareas_diarias $tareas_diarias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tareas_diarias  $tareas_diarias
     * @return \Illuminate\Http\Response
     */
    public function edit(tareas_diarias $tareas_diarias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tareas_diarias  $tareas_diarias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tareas_diarias $tareas_diarias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tareas_diarias  $tareas_diarias
     * @return \Illuminate\Http\Response
     */
    public function destroy(tareas_diarias $tareas_diarias)
    {
        //
    }
}
