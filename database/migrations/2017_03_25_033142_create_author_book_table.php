<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorBookTable extends Migration
{

    public function up()
    {
        Schema::create('author_book', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned()->index();
            $table->integer('book_id')->unsigned()->index();
            $table->foreign('author_id')
                ->references('id')
                ->on('authors');
            $table->foreign('book_id')
                ->references('id')
                ->on('books');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('author_book');
    }
}
