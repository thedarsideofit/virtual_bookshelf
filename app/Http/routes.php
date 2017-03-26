<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});



/**
 * Shelf Routes for resource book
 */
$app->get('book',[
    'as' => 'book_index', 'uses' => 'BooksShelfController@all'
]);
$app->get('book/{id}',[
    'as' => 'book_show', 'uses' => 'BooksShelfController@get'
]);
$app->get('book_ajax', 'BooksShelfController@allAjax');

/**
 * Shelf Routes for resource author
 */
$app->get('author', 'AuthorsShelfController@all');
$app->get('author/{id}', [
    'as' => 'author_show', 'uses' => 'AuthorsShelfController@get'
]);

/**
 * Shelf Routes for resource subject
 */
$app->get('subject', 'SubjectsShelfController@all');
$app->get('subject/{id}', [
    'as' => 'subject_show', 'uses' => 'SubjectsShelfController@get'
]);


/**
 * REST Routes for resource book
 */
$app->get('api/book', 'BooksController@all');
$app->get('api/book/{id}', 'BooksController@get');
$app->post('api/book', 'BooksController@add');
$app->put('api/book/{id}', 'BooksController@put');
$app->delete('api/book/{id}', 'BooksController@remove');

/**
 * REST Routes for resource author
 */
$app->get('api/author', 'AuthorsController@all');
$app->get('api/author/{id}', 'AuthorsController@get');
$app->post('api/author', 'AuthorsController@add');
$app->put('api/author/{id}', 'AuthorsController@put');
$app->delete('api/author/{id}', 'AuthorsController@remove');

/**
 * REST Routes for resource subject
 */
$app->get('api/subject', 'SubjectsController@all');
$app->get('api/subject/{id}', 'SubjectsController@get');
$app->post('api/subject', 'SubjectsController@add');
$app->put('api/subject/{id}', 'SubjectsController@put');
$app->delete('api/subject/{id}', 'SubjectsController@remove');
