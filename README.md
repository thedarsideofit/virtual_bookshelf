# Virtual BookShelf - Code Challenge

This is a project that arises from a code challenge.
In 48 hours I had to make a virtual bookcase with PHP trying to use the MVC pattern or some library or framework.
The purpose of this repository is to serve as an example to those who need to start with the technologies used to fulfill this objective
## Activity Log
* I chose lumen above silex because it is more performing microframework.
	https://www.slant.co/versus/3765/9176/~silex_vs_lumen
* I chose https://openlibrary.org/developers/api to review the main structure of data and logic
* I chose sublime text 3 with some plugins https://mattstauffer.co/blog/sublime-text-3-for-php-developers
* Lumen dosn’t have a “make” command like Laravel then i use this bundle https://github.com/webNeat/lumen-generators#installation
* I had to adapt this bootstrap template https://startbootstrap.com/template-overviews/shop-homepage/
* I had problems embedding controllers like I did in twig.I could fix it with view composer
* In the search form i try to use the Form helper and lumen don’t have one out of the box. I used
	https://github.com/vluzrmos/collective-html
* I used select2 to retrieve books trough ajax call https://styde.net/etiquetas-dinamicas-con-select2-y-ajax-en-laravel/
* For the top 10 artist i used  and extract the artists
	https://rss.itunes.apple.com/us/?urlDesc=%2Fgenerator
https://itunes.apple.com/us/rss/topsongs/limit=10/json


  - Import a HTML file and watch it magically convert to Markdown
  - Drag and drop images (requires your Dropbox account be linked)




### Dependencies

Virtual BookShelf requires to run:
* [PHP](http://www.php.net/) ">=5.5.9" 
* [Mysql](https://www.mysql.com/) >= 5.5.54

Virtual BookShelf uses Lumen
#### Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs)

### Installation

Clone this repository.
```sh
$ git clone https://github.com/thedarsideofit/virtual_bookshelf.git
```
Install dependencies via [Composer](https://github.com/composer/composer/blob/master/README.md)
```sh
$ composer install
```
After you install the dependencies you must create a database and set the credentials in the .env file

```sh
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomKey!!!

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=DATABSENAME
DB_USERNAME=USER
DB_PASSWORD=PASSWORD

CACHE_DRIVER=memcached
QUEUE_DRIVER=sync
```
After configuring database access, execute the commands for schema creation and test data loading
```sh
$ php artisan migrate
$ php artisan db:seed 
```
As final step you can use the php internal web server and launch the application
```sh
$ php -S localhost:8000 -t ./public
```


### Development

Want to contribute? Great!
Make the PR to the develop branch or open an issue.

### [License Apapche 2](https://github.com/thedarsideofit/virtual_bookshelf/blob/master/LICENSE)