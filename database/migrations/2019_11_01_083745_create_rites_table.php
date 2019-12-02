<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rites', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ritename');
            $table->integer('riteyear');
            $table->string('ritehoto1');
            $table->string('ritehoto2');
            $table->string('ritehoto3');
            $table->string('ritehoto4');
            $table->string('ritehoto5');
            $table->string('ritehoto6');
            $table->string('ritehoto7');
            $table->string('ritehoto8');
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
        Schema::dropIfExists('rites');
    }
}
