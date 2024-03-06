<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRackingsystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rackingsystem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->text('sdescription')->nullable(true);
            $table->text('ldescription')->nullable(true);
            $table->string('manufacturer')->nullable(true);
            $table->string('model')->nullable(true);
            $table->string('capacity')->nullable(true);
            $table->string('type_of_load')->nullable(true);
            $table->string('type_of_pallet')->nullable(true);
            $table->string('size_of_pallet')->nullable(true);
            $table->string('pallet_unit_load')->nullable(true);
            $table->string('floor_dimension')->nullable(true);
            $table->string('aisle_width_available')->nullable(true);
            $table->string('warehouse_clear_height')->nullable(true);
            $table->string('equipment_to_be_used')->nullable(true);
            $table->string('equipment_width')->nullable(true);
            $table->string('straddle_width')->nullable(true);
            $table->string('floor_layout')->nullable(true);
            $table->string('section_details')->nullable(true);
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
        Schema::dropIfExists('rackingsystem');
    }
}
