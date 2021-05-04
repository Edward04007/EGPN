<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTBQUESTOESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('"TB_QUESTOES"', function (Blueprint $table) {
            $table->foreign('fk_assunto', 'assunto')->references('pk_id')->on('TB_USUARIO')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('"TB_QUESTOES"', function (Blueprint $table) {
            $table->dropForeign('assunto');
        });
    }
}
