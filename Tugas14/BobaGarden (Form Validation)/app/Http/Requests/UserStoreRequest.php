<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name' => 'required|min:4|max:50',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required'
        ];
    }

    function messages()
    {
        return [
            'name.required' => 'Field nama wajib diisi',
            'name.min' => 'Nama harus minimal 4 karakter',
            'name.max' => 'Nama harus maksimal 50 karakter',
            'email.required' => 'Field Email wajib diisi',
            'email.unique' => 'Email Tersebut telah digunakan',
            'password.required' => 'Password wajib diisi',
            'no_handphone.required' => 'No Handphone wajib diisi'
        ];
    }
}
