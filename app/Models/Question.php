<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


    // protected $with = ['choices'];

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

    public function choices(){
        return $this->hasMany(Choice::class);
    }
}
