<?php

namespace App\Http\Controllers;

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
