<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTBUSUARIOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('"TB_USUARIO"', function (Blueprint $table) {
            $table->foreign('fk_funcao', 'funcao')->references('pk_id')->on('TB_FUNCAO')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('"TB_USUARIO"', function (Blueprint $table) {
            $table->dropForeign('funcao');
        });
    }
}
