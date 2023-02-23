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
        Schema::create('piece_activites', function (Blueprint $table) {
            $table->id();
            $table->double("qte");
            $table->unsignedBigInteger("activite_id");
            $table->foreign('activite_id')->references('id')->on('activites')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger("equipement_id");
            $table->foreign('equipement_id')->references('id')->on('equipements')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('piece_activites');
    }
};
