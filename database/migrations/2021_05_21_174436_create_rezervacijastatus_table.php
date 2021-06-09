<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervacijastatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacijastatus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rezervacija_id');
            $table->unsignedBigInteger('statusrezervacije_id');
            $table->date('datum');
            $table->foreign('rezervacija_id')->references('id')->on('rezervacijas')->onDelete('cascade');
            $table->foreign('statusrezervacije_id')->references('id')->on('statusrezervacijes')->onDelete('cascade');
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
        Schema::dropIfExists('rezervacijastatus');
    }
}
