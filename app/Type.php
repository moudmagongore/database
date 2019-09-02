<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['nom'];


    public function topics()
	{
		return $this->hasMany('App\Topic');
	}
}


