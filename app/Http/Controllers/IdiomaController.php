<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdiomaRequest;
use App\Http\Requests\UpdateIdiomaRequest;
use App\Models\Idioma;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idiomas = Idioma::paginate(12);
        return view('idioma.listado', ['idiomas' => $idiomas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('idioma.formulario_idioma');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIdiomaRequest $request)
    {
        $idioma = new Idioma($request->input());
        $idioma->saveOrFail();
        return redirect(route('idiomas.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Idioma $idioma)
    {
        return view('idioma.mostrar_idioma', ['idioma' => $idioma]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idioma $idioma)
    {
        return view('idioma.formulario_edit', ['idioma' => $idioma]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIdiomaRequest $request, Idioma $idioma)
    {
        $datos = $request->input();
        $idioma->update($datos);
        return redirect(route('idiomas.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idioma $idioma)
    {
        $idioma->deleteOrFail();
        return redirect(route('idiomas.index'));
    }
}
