<?php

namespace App\Http\Controllers;

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
