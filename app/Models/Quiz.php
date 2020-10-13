<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'en_name', 'slug'
    ];


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
