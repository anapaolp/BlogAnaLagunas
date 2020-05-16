<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function restaurante()
    {
    	return $this->belongsTo('App\User');
    }
}
