<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectManagers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('project_managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('project_id');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('work_place')->nullable();
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
        //

        Schema::dropIfExists('project_managers');
    }
}
