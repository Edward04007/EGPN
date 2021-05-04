<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBASSUNTOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('"TB_ASSUNTO"', function (Blueprint $table) {
            $table->integer('pk_id', true);
            $table->integer('fk_disciplina')->nullable()->index('fki_disc');
            $table->char('assunto', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('"TB_ASSUNTO"');
    }
}
