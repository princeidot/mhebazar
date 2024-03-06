<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScissorsLiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scissorslift', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->text('sdescription')->nullable(true);
            $table->text('ldescription')->nullable(true);
            $table->string('manufacturer')->nullable(true);
            $table->string('model')->nullable(true);
            $table->string('capacity')->nullable(true);
            $table->string('operator_type')->nullable(true);
            $table->string('platform_length')->nullable(true);
            $table->string('platform_width')->nullable(true);
            $table->string('max_lift-height')->nullable(true);
            $table->string('hydraulic_cylinder_no')->nullable(true);
            $table->string('floor_lock_no')->nullable(true);
            $table->string('floor_lock_type')->nullable(true);
            $table->string('no_of_wheel')->nullable(true);         
            $table->string('wheel_type')->nullable(true);
            $table->string('wheel_dimensions')->nullable(true);
            $table->string('platform_extension')->nullable(true);
           

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
        Schema::dropIfExists('_scissors_lift');
    }
}
