<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLedgerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ledgers', function (Blueprint $table) {
            $table->increments('excLine');
            $table->integer('poNum')->unsigned();
            $table->foreign('poNum')->references('id')->on('poinputs');
            $table->integer('txNum');
            $table->string('desc');
            $table->decimal('amt', 19, 2);
            $table->boolean('relieved');
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
        Schema::drop('ledgers');
    }
}
