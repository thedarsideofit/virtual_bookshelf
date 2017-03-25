<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create('books', function(Blueprint $table) {
            $table->increments('id');
            $table->string('bib_key');
            $table->string('title');
            $table->integer('number_of_pages');
            $table->date('publish_date');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('books');
    }
}
