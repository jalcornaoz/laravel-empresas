<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Models\Producto;

class ProductoController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        $productos = Producto::paginate(12);
        return view('producto.listado', ['productos' => $productos]);
       }

    //Show the form for creating a new resource.
    public function create()
    {
        return view('producto.formulario_producto');
    }

    //Store a newly created resource in storage.
    public function store(StoreProductoRequest $request)
    {
        $producto = new Producto($request->input());
        $producto->saveOrFail();
        return redirect(route('productos.index'));
    }

    //Display the specified resource.
    public function show(Producto $producto)
    {
        return view('producto.mostrar_producto',['producto'=>$producto]);
    }

    //Show the form for editing the specified resource.
    public function edit(Producto $producto)
    {
        return view('producto.formulario_edit', ['producto' => $producto]);
    }

    //Update the specified resource in storage.
    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        $datos = $request->input();
        $producto->update($datos);
        return redirect(route('productos.index'));
    }

    //Remove the specified resource from storage.
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect(route('productos.index'));
    }
}
