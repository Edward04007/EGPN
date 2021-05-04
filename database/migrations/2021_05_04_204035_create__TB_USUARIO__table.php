<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBUSUARIOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('"TB_USUARIO"', function (Blueprint $table) {
            $table->integer('pk_id', true);
            $table->char('nome_usuario', 40);
            $table->char('foto_usuario', 31);
            $table->char('senha_usuario', 64);
            $table->integer('fk_funcao')->nullable()->index('fki_funcao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('"TB_USUARIO"');
    }
}
