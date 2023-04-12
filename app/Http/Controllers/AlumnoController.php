<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(10);

        $campos = array_keys($alumnos[0]->getAttributes());

        unset($campos[array_search("created_at", $campos)]);
        unset($campos[array_search("updated_at", $campos)]);
        unset($campos[array_search("empresa_id", $campos)]);

        return view('alumno.listado', ['filas' => $alumnos, 'campos' => $campos, 'tabla' => 'alumnos']);
    }

    public function get_paginate()
    {
        $alumnos = Alumno::paginate(10);
        return response($alumnos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        $alumno = new Alumno($request->input());
        $alumno->saveOrFail();
        return redirect(route('alumnos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('alumno.mostrar_alumno', ['alumno' => $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumno.formulario_edit', ['alumno' => $alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        $datos = $request->input();
        $alumno->update($datos);
        return redirect(route('alumnos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->deleteOrFail();
        return redirect(route('alumnos.index'));
    }
}
