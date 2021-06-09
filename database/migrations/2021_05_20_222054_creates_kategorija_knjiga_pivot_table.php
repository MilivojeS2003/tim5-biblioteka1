<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesKategorijaKnjigaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategorija_knjiga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategorija_id');
            $table->unsignedBigInteger('knjiga_id');
            $table->foreign('kategorija_id')->references('id')->on('kategorijas')->onDelete('cascade');
            $table->foreign('knjiga_id')->references('id')->on('knjigas')->onDelete('cascade');
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
        Schema::dropIfExists('kategorija_knjiga');
    }
}
