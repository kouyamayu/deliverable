<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GymRequest extends FormRequest
{
    public function rules()
    {
        return [
            'gym.name' =>'required|string|max:100',
            'gym.price'=>'required|Integer|max:100000',
            //'gym.price'=>'required|string|max:20',
            'gym.is_24_hours'=>'required|string|max:30',
            //'gym.is_24_hours'=>'required|string|max:30',
            'gym.contents'=>'required|string|max:4000',
            //'gym.contents'=>'repuired|string|max:4000',
            'gym.url'=>'required|string|max:2083',
            //'gym.url'=>'repuired|string|max:2083',
            'gym.address'=>'required|string|max:100',
        ];
    }
}
