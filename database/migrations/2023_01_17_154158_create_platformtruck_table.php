<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformtruckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platformtruck', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->text('sdescription');
            $table->text('ldescription');
            $table->string('manufacturer');
            $table->string('Model');
            $table->string('capacity');
            $table->string('operator_type');
            $table->string('plateform');
            $table->string('operation');
            $table->string('wheel_base');
            $table->string('batteryWeight');
            $table->string('serviceWeight');
            $table->string('tyres');
            $table->string('tyre_size_front');
            $table->string('tyre_size_rear');
            $table->string('n_o_w');
            $table->string('track_width');
            $table->string('overall_length');
            $table->string('overall_width');
            $table->string('battery_compartment');
            $table->string('turning_radius');
            $table->string('platform_size');
            $table->string('platform_height');
            $table->string('towing_height');
            $table->string('TravelSpeed');
            $table->string('Gradient');
            $table->string('service_brake_type');
            $table->string('parking_brake_type');
            $table->string('drive_motor_rating');
            $table->string('drive');
            $table->string('BatteryType');
            $table->string('BatteryCapacity');
            $table->string('charger_capacity');
            $table->string('drive_control');       
           
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
        Schema::dropIfExists('platformtruck');
    }
}
