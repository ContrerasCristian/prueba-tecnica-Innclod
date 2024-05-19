<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Proceso;

class ProcesoController extends Controller
{
    public function index()
    {
        $procesos = Proceso::all();
        return view('proceso_documentos.index', compact('procesos'));
    }

    public function create()
    {
        return view('proceso_documentos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validarDatos= $request->validate([
            'pro_nombre' => 'required|string|max:255',
            'pro_prefijo' => 'required|string|max:255',
        ]);

        $proceso = new Proceso();
        $proceso->pro_nombre = $validarDatos['pro_nombre'];
        $proceso->pro_prefijo = $validarDatos['pro_prefijo'];
        $proceso->save();

        return redirect()->route('procesos.index')->with('Creacion exitosa', 'Proceso creado correctamete');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $proceso = Proceso::find($id);
        return view('proceso_documentos.editar', compact('proceso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $proceso = Proceso::find($id);
        $proceso->pro_nombre = $request->pro_nombre;
        $proceso->pro_prefijo = $request->pro_prefijo;
        
        $proceso->save();

        return redirect()->route('procesos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proceso = Proceso::find($id);
        $proceso->delete();
        return redirect()->route('procesos.index');
    }
}
