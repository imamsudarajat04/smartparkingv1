<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ParkingRequest extends FormRequest
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
                'place_id'     => 'required',
                'category_vehicle_id' => 'required',
                'parkingStock'    => 'required',
                'parkingPrice' => 'required'
            ];
        } else {
            $rules = [
                'place_id'     => 'required',
                'category_vehicle_id' => 'required',
                'parkingStock'    => 'required',
                'parkingPrice' => 'required'
            ];
        }

        return $rules;
    }
}
