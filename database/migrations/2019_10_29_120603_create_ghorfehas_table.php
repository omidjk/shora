<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGhorfehasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghorfehas', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('yearofreq');
            $table->string('marchigtype');
            $table->integer('numberghorfeh');
            $table->integer('meteraj');
            $table->integer('meterajkol');
            $table->string('structuretype');
            $table->string('activitytype');
            $table->string('ghormasname');
            $table->string('ghormasfamily');
            $table->string('ghormasnational');
            $table->string('ghormasphone');
            $table->string('ghormasmobile');
            $table->string('ghormasphoto');
            $table->string('specials');
            $table->integer('organid');
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
        Schema::dropIfExists('ghorfehas');
    }
}
