<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'doc_documentos';
    protected $primaryKey = 'doc_id';
    protected $fillable = ['doc_nombre','doc_codigo','doc_contenido','doc_id_tipo','doc_id_proceso'];
}
