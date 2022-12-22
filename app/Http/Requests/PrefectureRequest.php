<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrefectureRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'prefecture.name' =>'required|string|max:100',
        ];
    }
}
