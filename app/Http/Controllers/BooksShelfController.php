<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    /**
     * Retrieves all books that match a search term and returns them with a json
     * 
     * @param  Request $request request
     * @return json           id | text structure
     */
    public function allAjax(Request $request)
    {
        $term = $request->term ?: '';
        $books = Book::where('title', 'like', $term.'%')->lists('title', 'id');
        $valid_books = [];
        foreach ($books as $id => $book) {
            $valid_books[] = ['id' => $id, 'text' => $book];
        }
        return response()->json($valid_books);
    }
}
