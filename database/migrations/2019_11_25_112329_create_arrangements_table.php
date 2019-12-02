<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArrangementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrangements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('riteid');
            $table->string('ritephoto');
            $table->string('riteelement');
            $table->string('elementtable');
            $table->string('elementname');
            $table->string('elementfontsize');
            $table->string('elementfontname');
            $table->string('elementcolor');
            $table->string('elementnamefontsize');
            $table->string('elementnamefontname');
            $table->string('elementnamecolor');
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
        Schema::dropIfExists('arrangements');
    }
}
