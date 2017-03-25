<?php

namespace App\Providers;

use App\Author;
use App\Book;
use App\Subject;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
 		if ($this->app->environment() == 'local') {
        	$this->app->register('Wn\Generators\CommandsServiceProvider');
    	}
    }

    /**
     * [boot description]
     * @return [type] [description]
     */
    public function boot() 
    {
        view()->composer('subjects-sidebar', function ($view) {    
            $subjects = Subject::all()->take(5);   
            $view->with('subjects',$subjects);
        });

        view()->composer('best-selling', function ($view) {    
            $bestSellers = Book::all()->take(5);   
            $view->with('bestSellers',$bestSellers);
        });

        view()->composer('authors-sidebar', function ($view) {    
            $authors = Author::all()->take(5);   
            $view->with('authors',$authors);
        });


    }
}
