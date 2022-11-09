<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string("libelle")->nullable();
            $table->string("bp")->nullable();
            $table->string("postal")->nullable();
            $table->string("ville");
            $table->string("quartier")->nullable();
            $table->string("pays")->default("TOGO");
            $table->string("email")->nullable();
            $table->string("tel1", 25);
            $table->string("tel2", 25)->nullable();
            $table->string("tel3", 25)->nullable();
            $table->string("address")->nullable();
            $table->string("addressbis")->nullable();
            $table->string("latitude")->nullable();
            $table->string("longitude")->nullable();
            $table->integer("establishment_id")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
