<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{

    protected $table = 'players_scores';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'score'
    ];


    public function player(){
        return $this->belongsTo(Player::class);
    }
}
