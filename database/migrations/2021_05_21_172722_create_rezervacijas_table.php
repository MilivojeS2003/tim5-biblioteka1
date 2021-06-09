<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervacijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacijas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('knjiga_id');
            $table->unsignedBigInteger('zakorisnik_id');
            $table->unsignedBigInteger('rezervisaokorisnik_id');
            $table->unsignedBigInteger('razlogzatvaranja_id');
            $table->date('datumpodnosenja');
            $table->date('datumrezervacije');
            $table->date('datumzatvaranja');
            $table->foreign('knjiga_id')->references('id')->on('knjigas')->onDelete('cascade');
            $table->foreign('zakorisnik_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rezervisaokorisnik_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('razlogzatvaranja_id')->references('id')->on('rzrezervacijes')->onDelete('cascade');
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
        Schema::dropIfExists('rezervacijas');
    }
}
