<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignorgantoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignorgantorites', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ritename');
            $table->integer('riteyear');
            $table->integer('organid');
            $table->string('organname');
            $table->string('organcode');
            $table->string('organprovince');
            $table->string('organcity');
            $table->string('ghorfehmarchigtype');
            $table->integer('numberghorfeh');
            $table->integer('ghorfehmeteraj');
            $table->integer('ghorfehmeterajkol');
            $table->string('ghormasname');
            $table->string('ghormasfamily');
            $table->string('ghormasnational');
            $table->string('ghormasphone');
            $table->string('ghormasmobile');
            $table->string('itemtype');
            $table->string('itemname');
            $table->string('itemnumber');
            $table->string('corname');
            $table->string('corfamily');
            $table->string('cornational');
            $table->string('corphone');
            $table->string('cormobile');
            $table->string('corfax');
            $table->string('mapdirection');
            $table->string('mapstreet');
            $table->string('mapplace1');
            $table->string('mapbeetween1');
            $table->string('mapplace2');
            $table->string('mapbeetween2');
            $table->string('mapphoto');
            $table->string('propertyname');
            $table->integer('propertywidth');
            $table->string('propertypelakno');
            $table->integer('licensestand');
            $table->integer('licenseanswerable');
            $table->integer('licensecontroller');
            $table->integer('licenseother');
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
        Schema::dropIfExists('assignorgantorites');
    }
}
