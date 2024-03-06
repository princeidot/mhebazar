<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hpt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->string('Manufacturer');
            $table->string('Model');
            $table->string('Capacity');
            $table->string('Operator Type');
            $table->string('Width Over Forks');
            $table->string('Fork Width');
            $table->string('Fork Length');
            $table->string('Min Height');
            $table->string('Lift Height');
            $table->string('Max Lift Height');
            $table->string('Single Fork Width');
            $table->string('Wheel Type');
            $table->string('Service Weight');
            $table->string('Overall Length');
            $table->string('Overall Height');
            $table->string('Turning Radius');
            $table->string('Material');

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
        Schema::dropIfExists('hpt');
    }
}
