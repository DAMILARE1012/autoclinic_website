<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraininghubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traininghubs', function (Blueprint $table) {
            $table->id();
            $table->text('training_hub');
            $table->string('img');
            $table->text('Facilities');
            $table->text('Expectations');
            $table->text('home_about');
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
        Schema::dropIfExists('traininghubs');
    }
}
