<?php

use App\Subject;
use Illuminate\Database\Seeder;

/**
 * Seed test data into books table
 *
 * @author Diego Ramirez <dramirez@hydras.com.ar>
 */
class SubjectTableSeeder extends Seeder  
{
    public function run()
    {
        Subject::create([
            'name' => 'Management',       
        ]);

        Subject::create([
            'name' => 'Software Development',            
        ]);

        Subject::create([
            'name' => 'Data Science',            
        ]);        

        for ($i=1; $i < 4 ; $i++) { 
            DB::table('book_subject')->insert([
                'subject_id' => rand(1,3),
                'book_id' => rand(1,3),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
    }
}