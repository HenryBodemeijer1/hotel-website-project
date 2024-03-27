<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naam', 50);
            $table->integer('nummer');
            $table->string('foto');
            $table->double('prijs');
            $table->integer('opervalkte');
            $table->integer('aantal_personen');
            $table->string('bad');
            $table->string('minibar');
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
        Schema::drop("kamers");
    }
};

