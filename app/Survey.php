<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = [
        'c_name', 'phone', 'crops_cultivated'
    ];


    public function customs(){
      return $this->hasMany('App\SurveyInput');
  	}
}
