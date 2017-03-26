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

        view()->composer('top-ten-artists', function ($view) {    
            $artists = Author::all()->take(10);   
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, 'https://itunes.apple.com/rss/topalbums/limit=50/json');
            $result = curl_exec($ch);
            curl_close($ch);

            $songs = json_decode($result, true);
            $artists = [];            
            foreach ($songs['feed']['entry'] as $song) {
                if ($song['im:artist']['label'] != 'Various Artists') {
                    $artists[$song['im:artist']['label']] = [
                        'name'        => $song['im:artist']['label'],
                        'href'        => isset($song['im:artist']['attributes'])?
                        $song['im:artist']['attributes']['href']: null,
                        'album'       => $song['im:name']['label'],
                        'album_link'       => $song['link']['attributes']['href'],
                        'album_thumb' => $song['im:image'][2]['label'],
                        'price'       => $song['im:price']['label']  
                    ];    
                }
                if (count($artists)== 10) {
                    break;
                }               
            }
            
            $view->with('artists',$artists);
        });
    }
}
