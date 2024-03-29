<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->char('codigo', 8)->primary();
            $table->string('nombre');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->date('vencimiento');
            $table->enum('categoria', ['Alimentos', 'Limpieza', 'Vestimenta']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}