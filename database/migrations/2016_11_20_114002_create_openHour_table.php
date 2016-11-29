<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenHourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_open_hours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('day_of_week')->unique();
            $table->string('title');
            $table->time('open_at')->format('H:i:00');
            $table->time('close_at')->format('H:i:00');
            $table->boolean('availability')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_open_hours');
    }
}
