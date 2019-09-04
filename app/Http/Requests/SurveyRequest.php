<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class SurveyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'c_name' => 'required|max:255',
            'phone' => 'required|numeric|min:5',
            'crops_cultivated' => 'required|max:255',
        ];
    }


    public function response(array $errors)
    {
       response()->json([
        'code' => 201,
        'errors' => $errors,
      ]);
     
    }
}
