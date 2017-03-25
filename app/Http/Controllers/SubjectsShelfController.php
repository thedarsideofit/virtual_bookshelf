<?php

namespace App\Http\Controllers;

/**
 * SubjectsShefController Provides the author's administration on the shelf
 * 
 * @author Diego Ramirez <dramirez@hydras.com.ar> 
 */
class SubjectsShelfController extends Controller
{    
       
    const MODEL = "App\Subject";

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
        return view('subjects', ['data' => $data]);
    }    
}
