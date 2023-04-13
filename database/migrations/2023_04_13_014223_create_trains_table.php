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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('firm',15);
            $table->string('start_station', 30);
            $table->string('end_station', 30);
            $table->float('time_start', 4,2);
            $table->float('time_end', 4,2);
            $table->tinyInteger('id_train');
            $table->tinyInteger('carriage');
            $table->boolean('deletion', false);
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
        Schema::dropIfExists('trains');
    }
};
