<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzdavanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izdavanjes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('knjiga_id');
            $table->unsignedBigInteger('izdaokorisnik_id');
            $table->unsignedBigInteger('pozajmiokorisnik_id');
            $table->date('datumizdavanja');
            $table->date('datumvracanja');
            $table->foreign('knjiga_id')->references('id')->on('knjigas')->onDelete('cascade');
            $table->foreign('izdaokorisnik_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pozajmiokorisnik_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('izdavanjes');
    }
}
