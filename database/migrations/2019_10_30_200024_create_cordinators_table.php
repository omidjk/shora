<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCordinatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cordinators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('yearofreq');
            $table->integer('organid');
            $table->string('corname');
            $table->string('corfamily');
            $table->string('cornational');
            $table->string('corphone');
            $table->string('cormobile');
            $table->string('corfax');
            $table->softDeletes();
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
        Schema::dropIfExists('cordinators');
    }
}
