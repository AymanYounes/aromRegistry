<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->text('name_full')->nullable();
            $table->string('image')->nullable();
            $table->text('short_desc')->nullable();
//            $table->string('managers')->nullable();
            $table->text('objectives')->nullable();
            $table->text('study_design')->nullable();
            $table->text('outcome_variables')->nullable();
            $table->text('analysis_plan')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
