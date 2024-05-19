<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Documento;
use \App\Models\Proceso;
use \App\Models\Tipo_documento;

class DocumentoController extends Controller
{

    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.index', compact('documentos'));
    }


    public function create()
    {
        $tiposDocumento = Tipo_documento::all();
        $tiposProceso = Proceso::all();
        return view('documentos.crear', compact('tiposDocumento','tiposProceso'));
    }


    public function store(Request $request)
    {
       $validarDatos = $request->validate([
            'nombreDoc' => 'required|string|max:40',
            'contenidoDoc' => 'required|string|max:40',
            // 'tip_id' => 'required|string|max:40',
            // 'proc_id' => 'required|string|max:40'
       ]);
       $tiposDocumento = Tipo_documento::find($request->tip_id);
       $tiposProceso = Proceso::find($request->proc_id);
       $prefijoTipoDocumento = $tiposDocumento->tip_prefijo;
       $prefijoTipoProceso = $tiposProceso->pro_prefijo;

       $count = Documento::where('doc_codigo', 'like', '$prefijoTipoDocumento-$prefijoTipoProceso-%' )->count() + 1;

       $codigo = "$prefijoTipoDocumento-$prefijoTipoProceso-$count";

       $documento = new Documento();
       $documento->doc_nombre = $request->nombreDoc;
       $documento->doc_codigo = $codigo;
       $documento->doc_contenido = $request->contenidoDoc;
       $documento->doc_id_tipo = $request->tip_id;
       $documento->doc_id_proceso = $request->proc_id;

       $documento->save();

       return redirect()->route('documento.index');
    }


    public function show(string $id)
    {
        //
        return redirect()->route('documento.edit', ['documento' => $id]);
    }


    public function edit(string $id)
    {
        $tiposDocumento = Tipo_documento::all();
        $tiposProceso = Proceso::all();
        $documento = Documento::find($id);
        return view('documentos.editar', compact('documento', 'tiposDocumento', 'tiposProceso'));
    }

    public function update(Request $request, string $id)
    {

        $documento = Documento::find($id);

        $documentoPrevioTipo = $documento->doc_id_tipo != $request->tip_id;
        $documentoPrevioProceso = $documento->doc_id_proceso != $request->proc_id;
        
        if( $documentoPrevioTipo ||  $documentoPrevioProceso) {

            $tiposDocumento = Tipo_documento::find($request->tip_id);
            $tiposProceso = Proceso::find($request->proc_id);
            $prefijoTipoDocumento = $tiposDocumento->tip_prefijo;
            $prefijoTipoProceso = $tiposProceso->pro_prefijo;
            
            $count = Documento::where('doc_codigo', 'like', '$prefijoTipoDocumento-$prefijoTipoProceso-%' )->count() + 1;
            $documento->doc_codigo = "$prefijoTipoDocumento-$prefijoTipoProceso-$count";
        }

        $documento->doc_nombre = $request->nombreDoc;
        $documento->doc_contenido = $request->contenidoDoc;
        $documento->doc_id_tipo = $request->tip_id;
        $documento->doc_id_proceso = $request->proc_id;

        $documento->save();

        return redirect()->route('documento.index');
        
    }


    public function destroy(string $id)
    {
        $documento = Documento::find($id);
        $documento->delete();
    }
}
