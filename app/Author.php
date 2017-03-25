<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

    protected $fillable = ["name", "url"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
    ];

    public function books()
    {
        return $this->hasMany("App\Book");
    }


}
