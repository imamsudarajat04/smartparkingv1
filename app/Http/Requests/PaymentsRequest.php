<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PaymentsRequest extends FormRequest
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
                'user_id'           => 'required|integer',
                'booking_id'        => 'required|integer',
                'payment_method'    => 'required|string',
                'transferPhoto'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'payment_date'      => 'required|date',
                'status'            => 'required|string',
            ];
        } else {
            $rules = [
                'user_id'           => 'required|integer',
                'booking_id'        => 'required|integer',
                'payment_method'    => 'required|string',
                'transferPhoto'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'payment_date'      => 'required|date',
                'status'            => 'required|string',
            ];
        }

        return $rules;
    }
}
