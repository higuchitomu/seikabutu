<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplyRequest extends FormRequest
{
     
     public function rules()
    {
        return [
            'reply.content' => 'required|string|max:4000',
            //
        ];
    }
}