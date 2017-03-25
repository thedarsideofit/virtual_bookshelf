<?php

namespace App\Http\Controllers;

/**
 * BooksShefController Provides the book's administration on the shelf
 * 
 * @author Diego Ramirez <dramirez@hydras.com.ar> 
 */
class BooksShelfController extends Controller
{
    const MODEL = "App\Book";

    use RESTActions;

    /**
     * Override for respond trait method
     * @param  integer status code
     * @param  array   data
     * 
     * @return Illuminate\Contracts\View\Factory
     */
    protected function respond($status, $data = [])
    {        
        return view('books', ['data' => $data]);
    }    
}
