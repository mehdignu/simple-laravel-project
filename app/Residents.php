<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    public function resident(){
        return $this->hasMany('App\Quotes');
    }
}
