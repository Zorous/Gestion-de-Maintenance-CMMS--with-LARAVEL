<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->id();
            $table->text("designation");
            $table->text("description");
            $table->unsignedBigInteger("categorie_id");
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->date('date_debut');
            $table->double('prix');
            $table->string('marque',100);
            $table->string('reference',100);
            $table->boolean('piece_de_rechange');
            $table->string('document',100);
            $table->unsignedBigInteger("service_id");
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('equipements');
    }
};
