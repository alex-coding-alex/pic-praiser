<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'comment' => ['required'],
            'user_id' => ['required', 'exists:users'],
            'post_id' => ['required', 'exists:posts'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
