<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStackerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stacker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->string('Manufacturer');
            $table->string('Model');
            $table->string('Capacity');
            $table->string('mast_type');
            $table->string('load_center_for_rated_capacity');
            $table->string('wheel_base');
            $table->string('wheel_type');
            $table->string('number_of_wheels');
            $table->string('lift_height');
            $table->string('max_extended_height');
            $table->string('lowered_height');
            $table->string('lowered_fork_height');
            $table->string('fork_dimensions');
            $table->string('overall_length');
            $table->string('overall_height');
            $table->string('turning_radius');
            $table->string('MinAisleWidth');
            $table->string('MinGroundClearance');
            $table->string('TravelSpeed');
            $table->string('LiftSpeed');
            $table->string('LoweringSpeed');
            $table->string('Gradient');
            $table->string('DriveMotor');
            $table->string('LiftMotor');
            $table->string('SteeringMotor');
            $table->string('BatteryType');
            $table->string('BatteryCapacity');
            $table->string('Controler');
            $table->string('BatteryWeight');
            $table->string('ServiceWeight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stacker');
    }
}
