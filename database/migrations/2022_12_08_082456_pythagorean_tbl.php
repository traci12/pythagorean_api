<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PythagoreanTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pythagorean_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('a');
            $table->string('b');
	    $table->string('c');
	    $table->string('avg');
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
        Schema::drop('pythagorean_tbl');
    }
}
