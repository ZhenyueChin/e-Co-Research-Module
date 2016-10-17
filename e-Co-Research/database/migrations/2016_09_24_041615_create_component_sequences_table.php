<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentSequencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_sequences', function (Blueprint $table) {
            $table->integer('form_specification_id')->reference('form_specifications')->on('id');
            $table->integer('form_component_id');
            $table->integer('position');
            $table->primary('form_specification_id');
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
    }
}
