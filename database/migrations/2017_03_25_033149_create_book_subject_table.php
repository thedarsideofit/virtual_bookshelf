<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSubjectTable extends Migration
{

    public function up()
    {
        Schema::create('book_subject', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned()->index();
            $table->integer('subject_id')->unsigned()->index();
            $table->foreign('book_id')
                ->references('id')
                ->on('books');
            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('book_subject');
    }
}
