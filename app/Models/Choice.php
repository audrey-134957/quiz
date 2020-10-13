<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'choice', 'question_id', 'is_correct'
    ];


    public function question(){
        return $this->belongsTo(Question::class);
    }
}
