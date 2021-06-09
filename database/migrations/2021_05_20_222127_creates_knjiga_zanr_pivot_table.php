<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesKnjigaZanrPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knjiga_zanr', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('knjiga_id');
            $table->unsignedBigInteger('zanr_id');
            $table->foreign('knjiga_id')->references('id')->on('knjigas')->onDelete('cascade');
            $table->foreign('zanr_id')->references('id')->on('zanrs')->onDelete('cascade');
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
        Schema::dropIfExists('knjiga_zanr');
    }
}
