<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ept', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->text('sdescription')->nullable(true);
            $table->text('ldescription')->nullable(true);
            $table->string('manufacturer')->nullable(true);
            $table->string('model')->nullable(true);
            $table->string('capacity')->nullable(true);
            $table->string('operator_type')->nullable(true);
            $table->string('width_over_forks')->nullable(true);
            $table->string('load_center_for_rated_capacity')->nullable(true);
            $table->string('travel_speed')->nullable(true);
            $table->string('lift_speed')->nullable(true);
            $table->string('lowering_speed')->nullable(true);
            $table->string('gradient')->nullable(true);
            $table->string('battery_type')->nullable(true);
            $table->string('battery_weight')->nullable(true);
            $table->string('battery_capacity')->nullable(true);
            $table->string('service_weight')->nullable(true);
            $table->string('wheelbase')->nullable(true);
            $table->string('overall_width')->nullable(true);
            $table->string('overall_length')->nullable(true);
            $table->string('lift_height')->nullable(true);
            $table->string('fork_lowering_height')->nullable(true);
            $table->string('fork_dimensions')->nullable(true);
            $table->string('ground_clearance')->nullable(true);
            $table->string('turning_radius')->nullable(true);
            $table->string('type_of_drive_motor')->nullable(true);
            $table->string('tyres')->nullable(true);
            $table->string('tyre_size_drive')->nullable(true);
            $table->string('tyre_size_load')->nullable(true);
            $table->string('support_rollers')->nullable(true);
            $table->string('number_of_wheels')->nullable(true);
            $table->string('lift_motor_rating')->nullable(true);
            $table->string('drive_motor_rating')->nullable(true);
            $table->string('drive_control')->nullable(true);
                
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
        Schema::dropIfExists('_ept');
    }
}
