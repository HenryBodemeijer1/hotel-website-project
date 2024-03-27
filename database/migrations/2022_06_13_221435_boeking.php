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
        Schema::create('boekings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("datum_booking");
            $table->string("naam_booking");
            $table->string("adres_booking");
            $table->integer("creditcard_booking");
            $table->date("aankomst_booking");
            $table->date("vertrek_booking");
            $table->integer("nummer_booking");
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop("boekings");
    }
};
