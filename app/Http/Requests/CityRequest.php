<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'city.name' =>'required|string|max:100',
        ];
    }
}
