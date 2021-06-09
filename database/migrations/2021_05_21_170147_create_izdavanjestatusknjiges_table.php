<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzdavanjestatusknjigesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izdavanjestatusknjiges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('izdavanje_id');
            $table->unsignedBigInteger('statusknjige_id');
            $table->date('datum');
            $table->foreign('izdavanje_id')->references('id')->on('izdavanjes')->onDelete('cascade');
            $table->foreign('statusknjige_id')->references('id')->on('statusknjiges')->onDelete('cascade');
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
        Schema::dropIfExists('izdavanjestatusknjiges');
    }
}
