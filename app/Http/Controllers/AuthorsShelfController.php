<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

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
     * Get resource by id
     * @param  integer $id resource id
     * 
     * @return json data | status
     */
    public function get($id)
    {
        $m = self::MODEL;
        $model = $m::find($id);
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, array($model));
    }

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
