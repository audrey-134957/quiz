<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'illustration', 'category_id'
    ];


    public function quizes()
    {
        return $this->hasMany(Quiz::class);
    }
}
