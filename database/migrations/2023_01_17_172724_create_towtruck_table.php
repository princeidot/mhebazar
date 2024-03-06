<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTowtruckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towtruck', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->text('sdescription')->nullable(true);
            $table->text('ldescription')->nullable(true);
            $table->string('manufacturer')->nullable(true);
            $table->string('Model')->nullable(true);
            $table->string('capacity')->nullable(true);
            $table->string('operator_type')->nullable(true);
            $table->string('rated_towing_ability')->nullable(true);
            $table->string('max_towing_capacity')->nullable(true);
            $table->string('turning_radius')->nullable(true);
            $table->string('travelspeed')->nullable(true);
            $table->string('overall_length')->nullable(true);
            $table->string('overall_width')->nullable(true);
            $table->string('overall_height')->nullable(true);
            $table->string('drive_motor_rating')->nullable(true);
            $table->string('gradient')->nullable(true);
            $table->string('battery_type')->nullable(true);
            $table->string('battery_capacity')->nullable(true);
            $table->string('controler')->nullable(true);
            $table->string('battery_weight')->nullable(true);
            $table->string('service_weight')->nullable(true);
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
        Schema::dropIfExists('towtruck');
    }
}
