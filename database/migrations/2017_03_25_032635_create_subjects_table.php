<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{

    public function up()
    {
        Schema::create('subjects', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('subjects');
    }
}
