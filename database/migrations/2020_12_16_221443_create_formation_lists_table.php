<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('fichier');
            $table->unsignedInteger('formation_id');
            $table->unsignedInteger('type_de_formation_id');
            $table->bigInteger('view_count')->nullable();
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
        Schema::dropIfExists('formation_lists');
    }
}
