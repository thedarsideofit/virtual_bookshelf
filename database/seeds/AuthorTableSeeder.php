<?php

use App\Author;
use Illuminate\Database\Seeder;

/**
 * Seed test data into books table
 *
 * @author Diego Ramirez <dramirez@hydras.com.ar>
 */
class AuthorTableSeeder extends Seeder  
{
    public function run()
    {
        Author::create([
            'name' => 'Seth Godin',       
        ]);

        Author::create([
            'name' => 'Martin Fowler',            
        ]);

        Author::create([
            'name' => 'Eric Ries',            
        ]);        

        for ($i=1; $i < 4 ; $i++) { 
            DB::table('author_book')->insert([
            'author_id' => rand(1,3),
            'book_id' => rand(1,3),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        }


    }
}