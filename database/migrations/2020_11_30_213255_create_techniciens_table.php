<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniciensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techniciens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('prenom');
            $table->string('identifiant')->unique();
            $table->bigInteger('numero_tel1');
            $table->bigInteger('numero_tel2')->nullable();
            $table->bigInteger('numero_tel_whatsapp')->nullable();
            $table->string('quartier_de_residence');
            $table->string('rattachement');
            $table->string('photo');
            $table->unsignedInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('ville');
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
        Schema::dropIfExists('techniciens');
    }
}
