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
        Schema::create('activites', function (Blueprint $table) {
        $table->id();
        $table->text("description");
        $table->date("date");
        $table->double("duree");
        $table->unsignedBigInteger('tache_id');
        $table->foreign('tache_id')->references('id')->on('taches');
        $table->unsignedBigInteger('technicien_id');
        $table->foreign('technicien_id')->references('id')->on('techniciens')->onUpdate('cascade')
        ->onDelete('cascade');
        $table->unsignedBigInteger('etat_id');
        $table->foreign('etat_id')->references('id')->on('etats')->onUpdate('cascade')
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
        Schema::dropIfExists('activites');
    }
};
