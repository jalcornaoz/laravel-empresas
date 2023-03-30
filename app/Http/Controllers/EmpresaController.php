<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        $empresas = Empresa::paginate(12);
        return view('empresa.listado', ['empresas' => $empresas]);
    }

    //Show the form for creating a new resource.
    public function create()
    {
        return view('empresa.formulario_empresa');
    }

    //Store a newly created resource in storage.
    public function store(StoreEmpresaRequest $request)
    {
        $empresa = new Empresa($request->input());
        $empresa->saveOrFail();
        return redirect(route('empresas.index'));
    }

    //Display the specified resource.
    public function show(Empresa $empresa)
    {
        return view('empresa.mostrar_empresa', ['empresa' => $empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.formulario_edit', ['empresa' => $empresa]);
    }

    //Update the specified resource in storage.

    public function update(UpdateEmpresaRequest $request, Empresa $empresa)
    {
        $datos = $request->input();
        $empresa->update($datos);
        return redirect(route('empresas.index'));
    }

    //Remove the specified resource from storage.
    public function destroy(Empresa $empresa)
    {
        $empresa->deleteOrFail();
        return redirect(route('empresas.index'));
    }
}
