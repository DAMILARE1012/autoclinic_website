<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingletrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singletrainings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('cost');
            $table->string('img');
            $table->string('inhouse_reg');
            $table->string('ext_reg');
            $table->text('training_for');
            $table->string('requirement');
            $table->text('outline');
            $table->string('routine');
            $table->string('duration');
            $table->string('courses');
            $table->text('expected_outcome');
            $table->boolean('status');
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
        Schema::dropIfExists('singletrainings');
    }
}
