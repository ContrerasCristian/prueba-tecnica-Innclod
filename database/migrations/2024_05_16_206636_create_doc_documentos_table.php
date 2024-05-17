<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doc_documentos', function (Blueprint $table) {
            $table->increments('doc_id');
            $table->string('doc_nombre');
            $table->integer('doc_codigo');
            $table->text('doc_contenido');
            $table->unsignedInteger('doc_id_tipo');
            $table->unsignedInteger('doc_id_proceso');
            $table->foreign('doc_id_tipo')->references('tip_id')->on('tip_tipo_doc');
            $table->foreign('doc_id_proceso')->references('pro_id')->on('pro_procesos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_documentos');
    }
};
