<?php

use App\Book;  
use Illuminate\Database\Seeder;

/**
 * Seed test data into books table
 *
 * @author Diego Ramirez <dramirez@hydras.com.ar>
 */
class BookTableSeeder extends Seeder  
{
    public function run()
    {
        Book::create([
            'title' => 'Success is going from failure to failure without losing your enthusiasm',
            'bib_key' => 'ISBN-1234',
            'number_of_pages' => 123
        ]);

        Book::create([
            'title' => 'Dream big and dare to fail',
            'bib_key' => 'ISBN-12345',            
            'number_of_pages' => 540
        ]);

        Book::create([
            'title' => 'It does not matter how slowly you go as long as you do not stop',
            'bib_key' => 'ISBN-123456',            
            'number_of_pages' => 'ISBN-1234567'
        ]);        
    }
}