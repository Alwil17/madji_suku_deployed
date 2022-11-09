<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string("classe")->nullable();
            $table->integer("inscrits")->default(0);
            $table->integer("admis")->default(0);
            $table->integer("annee_debut")->default(2000);
            $table->integer("annee_fin")->default(2001);
            $table->integer("establishment_id");
            $table->integer("exam_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
