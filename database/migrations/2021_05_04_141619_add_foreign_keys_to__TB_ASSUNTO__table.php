<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTBASSUNTOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('"TB_ASSUNTO"', function (Blueprint $table) {
            $table->foreign('fk_disciplina', 'disc')->references('pk_id')->on('TB_DISCIPLINAS')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('"TB_ASSUNTO"', function (Blueprint $table) {
            $table->dropForeign('disc');
        });
    }
}
