<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelectedChoice extends Model
{

    protected $table = 'players_selected_choices';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    public function player(){
        return $this->belongsTo(Player::class);
    }

}