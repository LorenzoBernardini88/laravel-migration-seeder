<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_travels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('destinazione',50);
            $table->string('Nazione',10);
            $table->string('Nazione',10);
            $table->bigInteger('distanza_km');
            $table->string('mezzo_trasporto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_travels');
    }
}
