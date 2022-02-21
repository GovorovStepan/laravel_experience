<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
{

    public function authorize(){
        return true;
    }

    public function rules() {
        return [
          'name' => 'required',
          'theme' => 'required|min:5',
          'email' => 'required|email',
          'message' => 'required|min:5|max:500',
        ];
    }

    public function messages(){
      return [
      '*.required' => 'The :attribute is required. Try again'

      ];
    }
}
