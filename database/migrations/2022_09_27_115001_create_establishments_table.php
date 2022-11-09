<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("slug")->nullable();
            $table->string("description_courte")->nullable();
            $table->text("description_longue")->nullable();
            $table->string("image")->nullable();
            $table->string("banner")->nullable();
            $table->integer("active")->default(0);
            $table->integer("address_principale")->nullable();
            $table->string("website")->nullable();
            $table->string("facebook")->nullable();
            $table->string("whatsapp")->nullable();
            $table->string("twitter")->nullable();
            $table->string("instagram")->nullable();
            $table->integer("user_id");
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
        Schema::dropIfExists('establishments');
    }
}
