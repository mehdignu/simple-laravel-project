<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    public function quotes(){
        return $this->belongsTo('App\Residents');
    }
}
