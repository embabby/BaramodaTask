<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyInput extends Model
{
    protected $fillable = [
        'survey_id', 'input_name', 'input_value'
    ];


    public function survey(){
      return $this->belongsTo('App\Survey');
    }


}
