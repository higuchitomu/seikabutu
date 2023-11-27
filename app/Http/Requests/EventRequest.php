<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
     
     public function rules()
    {
        return [
            'event.title' => 'required|string|max:100',
            'event.content' => 'required|string|max:4000',
            //
        ];
    }
}