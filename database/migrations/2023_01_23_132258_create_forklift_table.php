<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForkliftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forklift', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->text('sdescription')->nullable(true);
            $table->text('ldescription')->nullable(true);
            $table->string('manufacturer')->nullable(true);
            $table->string('model')->nullable(true);
            $table->string('capacity')->nullable(true);
            $table->string('operator_type')->nullable(true);
            $table->string('load_center_for_rated_capacity')->nullable(true);
            $table->string('power_mode')->nullable(true);
            $table->string('driving_mode')->nullable(true);
            $table->string('front_overhang')->nullable(true);
            $table->string('wheelbase')->nullable(true);
            $table->string('service_weight')->nullable(true);
            $table->string('axle_load_laden_front')->nullable(true);
            $table->string('axle_load_unladen-front')->nullable(true);
            $table->string('tyre_type')->nullable(true);
            $table->string('tyre_size_front')->nullable(true);
            $table->string('tyre_size_rear')->nullable(true);
            $table->string('wheel_number')->nullable(true);
            $table->string('tread_front')->nullable(true);
            $table->string('tread_rear')->nullable(true);
            $table->string('mast_tilt_angle')->nullable(true);
            $table->string('height')->nullable(true);
            $table->string('free_lifting_height')->nullable(true);
            $table->string('lifting_height')->nullable(true);
            $table->string('max_height_extended')->nullable(true);
            $table->string('height_of_overhead_guard')->nullable(true);
            $table->string('seat_height_relating_to_sip')->nullable(true);
            $table->string('towing_coupling_height')->nullable(true);
            $table->string('overall_length_with_fork')->nullable(true);
            $table->string('overall_length_without_fork')->nullable(true);
            $table->string('overall_width')->nullable(true);
            $table->string('fork_dimension')->nullable(true);
            $table->string('fork_carriage')->nullable(true);
            $table->string('distance_across_fork_arm')->nullable(true);
            $table->string('ground_clearance_at_mast')->nullable(true);
            $table->string('ground_clearance_center_of-wheel')->nullable(true);
            $table->string('right_angle_stacking_aisle_width_for_pallet_1000x1200mm')->nullable(true);
            $table->string('right_angle_stacking_aisle_width_for_pallet_800x1200mm')->nullable(true);
            $table->string('min_outside_turning_radius')->nullable(true);
            $table->string('travel_speed')->nullable(true);
            $table->string('lift_speed')->nullable(true);
            $table->string('lowering_speed')->nullable(true);
            $table->string('max_drawbar_pull')->nullable(true);
            $table->string('max_gradeability')->nullable(true);
            $table->string('acceleration_time')->nullable(true);
            $table->string('battery_type')->nullable(true);
            $table->string('battery_capacity')->nullable(true);
            $table->string('battery_weight')->nullable(true);
            $table->string('drive_motor_rating')->nullable(true);
            $table->string('lifting_motor_rating')->nullable(true);
            $table->string('drive_motor_control_mode')->nullable(true);
            $table->string('lifting_motor_control_mode')->nullable(true);
            $table->string('service_break_type')->nullable(true);
            $table->string('parking_break_type')->nullable(true);
            $table->string('operating_pressure_for_attachment')->nullable(true);
            $table->string('engine_model')->nullable(true);
            $table->string('engine_rated_power_rated_speed')->nullable(true);
            $table->string('max_torque_rated_speed')->nullable(true);
            $table->string('fuel_consumption')->nullable(true);
            $table->string('gearbox')->nullable(true);


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
        Schema::dropIfExists('forklift');
    }
}
