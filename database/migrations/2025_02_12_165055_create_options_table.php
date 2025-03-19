<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('introduction')->nullable();
            $table->text('requirements')->nullable();
            $table->text('eligibility')->nullable();
            $table->text('course_content')->nullable();
            $table->text('expected_outcomes')->nullable();
            $table->text('routine')->nullable();
            $table->string('cost')->nullable();
            $table->text('duration')->nullable();
            $table->string('reg_link')->nullable();
            $table->string('img')->nullable();

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
        Schema::dropIfExists('options');
    }
}
