<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainerhandlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containerhandler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->text('sdescription')->nullable(true);
            $table->text('ldescription')->nullable(true);
            $table->string('manufacturer')->nullable(true);
            $table->string('model')->nullable(true);
            $table->string('capacity')->nullable(true);
            $table->string('operator_type')->nullable(true);
            $table->string('load_center_for_rated_capacity')->nullable(true);
            $table->string('max_handling_layers')->nullable(true);
            $table->string('length_of_container_lifted')->nullable(true);
            $table->string('max_rotary_lock_height')->nullable(true);
            $table->string('min_rotary_lock_height')->nullable(true);
            $table->string('lifting_speed')->nullable(true);
            $table->string('lowering_speed')->nullable(true);
            $table->string('mast_tilt')->nullable(true);
            $table->string('traveling_speed')->nullable(true);
            $table->string('min_turning_radius')->nullable(true);
            $table->string('max_gradeability')->nullable(true);
            $table->string('overall_length')->nullable(true);
            $table->string('overall_width')->nullable(true);
            $table->string('overall_height')->nullable(true);
            $table->string('wheel_base')->nullable(true);
            $table->string('tread')->nullable(true);
            $table->string('min_under_clearance')->nullable(true);
            $table->string('lateral_displacement_of_spreader')->nullable(true);
            $table->string('engine_manufacturer')->nullable(true);
            $table->string('engine_model')->nullable(true);
            $table->string('wheel_number')->nullable(true);
            $table->string('engine_rated_power_rated_speed')->nullable(true);
            $table->string('max_torque_rated_speed')->nullable(true);
            $table->string('fuel_consumption')->nullable(true);
            $table->string('gearbox')->nullable(true);
            $table->string('tyre_type')->nullable(true);
            $table->string('tyre_size_front')->nullable(true);
            $table->string('tyre_size_rear')->nullable(true);


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
        Schema::dropIfExists('containerhandler');
    }
}
