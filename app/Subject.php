<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

    protected $fillable = ["name"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
    ];

    public function books()
    {
        return $this->hasMany("App\Book");
    }


}
