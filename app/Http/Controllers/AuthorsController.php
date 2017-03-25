<?php namespace App\Http\Controllers;
/**
 * AuthorsController Provides author resource management
 * 
 * @author Diego Ramirez <dramirez@hydras.com.ar> 
 */
class AuthorsController extends Controller {

    const MODEL = "App\Author";

    use RESTActions;

}
