<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Distribution extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribution', function(Blueprint $table){
            $table->integer('distribution_node_id')->unsigned();
            $table->integer('organizational_node_id')->unsigned();
            $table->timestamps();

            //Index and Foreign Keys
            $table->foreign('distribution_node_id')->references('id')->on('nodes');
            $table->foreign('organizational_node_id')->references('id')->on('nodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distribution');
    }
}
