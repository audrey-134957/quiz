<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip', 'username', 'name', 'firstname'
    ];


    public function scores(){
        return $this->hasMany(Score::class);
    }

    public function selected_choices(){
        return $this->hasMany(SelectedChoice::class);
    }
}
