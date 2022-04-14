<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddpatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addpatients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fName')->nullable();
            $table->string('lName')->nullable();
            $table->integer('idnumber')->nullable();
            $table->mediumText('address')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('phone2')->nullable();
            $table->date('birthday')->nullable();
            $table->string('Marital')->nullable();

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
        Schema::dropIfExists('addpatients');
    }
}