<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Survey;
use App\SurveyInput;
use App\Http\Requests\SurveyRequest;

class SurveyController extends Controller
{
    
    public function index()
    {
      $surveys = Survey::all();
      return view('surveys.pages.all', compact('surveys'));
    }

    
    public function create()
    { 
        return view('surveys.pages.create');
    }

    
    public function store(SurveyRequest $request)
    { 

      $survey = Survey::create([
                    'c_name' => $request->c_name,
                    'phone' => $request->phone,                   
                    'crops_cultivated' => $request->crops_cultivated,
                ]);
      $survey->save();
  
      if( isset($request->input)) {

        $all_inputs = [];
        for($i=0 ; $i<count($request->input)+1 ; $i++){
          if( isset($request->input['name'][$i]) && isset($request->input['val'][$i]) ) {
          $all_inputs[$i]['input_name'] = $request->input['name'][$i];
          $all_inputs[$i]['input_value'] = $request->input['val'][$i];
          $all_inputs[$i]['survey_id'] = $survey->id;
          }
        }

        $survey->customs()->createMany($all_inputs);
    }
    return redirect()->route('survey.index')->with('message','Survey Created Succefully');
    
    }

    
   
    public function edit($id)
    {
      $survey = Survey::find($id);
      return view('surveys.pages.edit', compact('survey'));
    }

    
    public function update(SurveyRequest $request, $id)
    {
      $survey = Survey::find($id);
      $survey->update($request->all());  

      return redirect()->route('survey.index')->with('message','Survey Edited Succefully');
    }


    public function getDelete($id)
    {

      $survey = Survey::find($id)->customs()->delete();
      $survey = Survey::find($id)->delete();
      return redirect()->route('survey.index')->with( 'message','Survey Had Been Deleted');
    }




}
