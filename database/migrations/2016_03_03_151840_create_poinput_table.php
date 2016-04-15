<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoinputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poinputs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('poDate');
            $table->string('desc');
            $table->integer('transNum');
            $table->decimal('origAmt', 19, 2);
            $table->decimal('adjAmt', 19, 2);
            $table->decimal('unrelAmt', 19, 2);
            $table->boolean('fullRel');
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
        Schema::drop('poinputs');
    }
}
