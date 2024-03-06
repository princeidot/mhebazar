<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDockLevellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_dock__leveller', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->unique();
            $table->text('sdescription')->nullable(true);
            $table->text('ldescription')->nullable(true);
            $table->string('manufacturer')->nullable(true);
            $table->string('Model')->nullable(true);
            $table->string('capacity')->nullable(true);
            $table->string('operator_type')->nullable(true);
            $table->string('Static_Load')->nullable(true);
            $table->string('Dynamic_Load')->nullable(true);
            $table->string('Working_Range_Above')->nullable(true);
            $table->string('Working_Range_Below')->nullable(true);
            $table->string('Platform_Length')->nullable(true);
            $table->string('Platform_Width')->nullable(true);
            $table->string('Lip_Length')->nullable(true);
            $table->string('Lip_width')->nullable(true);
            $table->string('Lip_Extention')->nullable(true);
            $table->string('Lip_Operation')->nullable(true);
            $table->string('Pit_Length')->nullable(true);
            $table->string('Pit_Width')->nullable(true);
            $table->string('Pit_Height')->nullable(true);
            $table->string('Lifting_Cylinder_No')->nullable(true);
            $table->string('Motor_Rating')->nullable(true);
  
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
        Schema::dropIfExists('_dock__leveller');
    }
}
