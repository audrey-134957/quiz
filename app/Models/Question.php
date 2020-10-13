<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question', 'illustration', 'quiz_id'
    ];


    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    public function choice(){
        return $this->hasMany(Choice::class);
    }
}
