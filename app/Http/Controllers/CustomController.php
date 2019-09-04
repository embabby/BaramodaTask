<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Survey;
use App\SurveyInput;

class CustomController extends Controller
{
    
    public function Settings($id)
    {
      $survey = Survey::find($id);
      // return $survey->customs;
      return view('surveys.pages.settings', compact('survey'));
    }



    public function createCustom($survey_id)
    {
      $survey = Survey::find($survey_id);
      return view('surveys.pages.create_custom', compact('survey'));
    }


    public function storeCustom(Request $request, $survey_id)
    {
      $survey = Survey::find($survey_id);

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



    public function editCustom($id)
    {
      $custom_input = SurveyInput::find($id);
      return view('surveys.pages.edit_custom', compact('custom_input'));
    }

    
    public function updateCustom(Request $request, $id)
    {
      $custom_input = SurveyInput::find($id);
      $custom_input->update($request->all());  

      return \Redirect::route('survey.settings', $custom_input->survey_id)->with('message', 'Input Updated Successfully!!!');

    }



    public function deleteCustom($id)
    {

      $custom_input = SurveyInput::find($id)->delete();
      return redirect()->back()->with( 'message','Input Deleted Successfully');
    }





}
