<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

    protected $fillable = ["bib_key", "title", "number_of_pages"];

    protected $dates = ["publish_date"];

    public static $rules = [
        "bib_key" => "required",
        "title" => "required",
        "number_of_pages" => "numeric",
    ];

    public function subject()
    {
        return $this->hasOne("App\Subject");
    }

    public function author()
    {
        return $this->hasMany("App\Author");
    }


}
