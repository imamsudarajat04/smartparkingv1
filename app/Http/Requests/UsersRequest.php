<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules = [
                'name'     => 'required',
                'password' => 'same:confirm-password',
                'phone'    => 'required',
                'dateBirth'=> 'required',
                'gender'   => 'required',
                'address'  => 'required',
                'role'    => 'required'
            ];
        } else {
            $rules = [
                'name'     => 'required',
                'email'    => 'required|email|unique:users,email',
                'password' => 'required|same:confirm-password',
                'phone'    => 'required',
                'dateBirth'=> 'required',
                'gender'   => 'required',
                'address'  => 'required',
                'role'    => 'required'
            ];
        }

        return $rules;
    }
}
