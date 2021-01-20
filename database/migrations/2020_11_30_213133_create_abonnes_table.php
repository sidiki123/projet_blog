<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnes', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('numero_de_reabonnement');
            $table->string('name');
            $table->string('prenom');
            $table->bigInteger('numero_tel1');
            $table->string('quartier_de_residence');
            $table->string('ville');
            $table->string('pays');
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
        Schema::dropIfExists('abonnes');
    }
}
