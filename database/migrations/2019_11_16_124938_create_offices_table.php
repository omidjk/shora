<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('officename');
            $table->integer('officecode');
            $table->string('province');
            $table->string('city');
            $table->integer('age');
            $table->integer('floors');
            $table->integer('units');
            $table->string('guestroom');
            $table->string('structure');
            $table->string('frontage');
            $table->string('firealarm');
            $table->string('fireext');
            $table->string('shield');
            $table->string('location');
            $table->string('usage');
            $table->string('ownership');
            $table->string('organsposition');
            $table->string('population');
            $table->string('leaderagent');
            $table->string('governor');
            $table->string('provincecouncil');
            $table->string('commanderarmy');
            $table->string('commanderpolice');
            $table->string('address');
            $table->string('postalcode');
            $table->string('phonenumber');
            $table->string('mobile');
            $table->string('bulidingmaps');
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
        Schema::dropIfExists('offices');
    }
}
