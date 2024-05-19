<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Tipo_documento;

class TipoDocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = Tipo_documento::all();
        return view('tipo_documentos.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo_documentos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validarDatos= $request->validate([
            'nombre' => 'required|string|max:255',
            'prefijo' => 'required|string|max:255',
        ]);

        $tipo = new Tipo_documento();
        $tipo->tip_nombre = $validarDatos['nombre'];
        $tipo->tip_prefijo = $validarDatos['prefijo'];
        $tipo->save();

        return redirect()->route('tipo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('tipo.edit', ['tipo' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipo = Tipo_documento::find($id);
        
        return view('tipo_documentos.editar', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tipo = Tipo_documento::find($id);
        $tipo->tip_nombre = $request->nombre;
        $tipo->tip_prefijo = $request->prefijo;
        
        $tipo->save();
        return redirect()->route('tipo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipo = Tipo_documento::find($id);
        $tipo->delete();

        return redirect()->route('tipo.index');
    }
}
