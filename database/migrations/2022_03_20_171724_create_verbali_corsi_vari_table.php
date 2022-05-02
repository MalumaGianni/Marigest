<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerbaliCorsiVariTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verbali_corsi_vari', function (Blueprint $table) {
            $table->id();
            $table->string('codice_verbale');
            $table->string('id_corso_ip');
            $table->string('voto');
            $table->string('ufficiale_commissione');
            $table->string('matricola_allievo');
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
        Schema::dropIfExists('verbali_corsi_vari');
    }
}
