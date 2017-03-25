<?php

namespace App\Http\Controllers;

/**
 * AuthorsShefController Provides the author's administration on the shelf
 * 
 * @author Diego Ramirez <dramirez@hydras.com.ar> 
 */
class AuthorsShelfController extends Controller
{    
       
    const MODEL = "App\Author";

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
        return view('authors', ['data' => $data]);
    }    
}
