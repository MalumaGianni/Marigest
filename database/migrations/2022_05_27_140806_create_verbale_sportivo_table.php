<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerbaleSportivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verbali_sportivi', function (Blueprint $table) {
            $table->id();
            $table->string('codice_verbale');
            $table->string('disciplina')->nullable(true);
            $table->string('matricola_allievo');
            $table->string('data_verbale');
            $table->string('voto');
            $table->string('id_user_redattore');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verbale_sportivo');
    }
}
