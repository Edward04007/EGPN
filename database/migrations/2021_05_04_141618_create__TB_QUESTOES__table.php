<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBQUESTOESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('"TB_QUESTOES"', function (Blueprint $table) {
            $table->integer('pk_id', true);
            $table->integer('fk_assunto')->nullable()->index('fki_assunto');
            $table->text('questao')->nullable();
            $table->text('alternativa_a')->nullable();
            $table->text('alternativa_b')->nullable();
            $table->text('alternativa_c')->nullable();
            $table->text('alternativa_d')->nullable();
            $table->text('alternativa_e')->nullable();
            $table->text('gabarito')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('"TB_QUESTOES"');
    }
}
