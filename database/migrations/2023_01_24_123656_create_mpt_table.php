<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->text('sdescription')->nullable(true);
            $table->text('ldescription')->nullable(true);
            $table->string('Manufacturer')->nullable(true);
            $table->string('Model')->nullable(true);
            $table->string('Capacity')->nullable(true);
            $table->string('operator_type')->nullable(true);
            $table->string('wheel_base')->nullable(true);
            $table->string('platform_size')->nullable(true);
            $table->string('platform_height')->nullable(true);
            $table->string('handle_height')->nullable(true);
            $table->string('overall_length')->nullable(true);
            $table->string('overall_width')->nullable(true);
            $table->string('overall_height')->nullable(true);
            $table->string('wheel_type')->nullable(true);

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
        Schema::dropIfExists('mpt');
    }
}
