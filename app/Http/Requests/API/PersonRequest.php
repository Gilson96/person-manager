<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            "first_name" => ["required","string", "max:50"],
            "last_name" => ["required","string", "max:50"],
            "username" => ["required","string", "min:6", "max:20"],
        ];
    }
}
