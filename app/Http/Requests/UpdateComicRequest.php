<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'title'=>'required|min:3',
                'description'=>'nullable|max:255',
                'thumb'=>'nullable|max:255',
                'price'=>'nullable|decimal:2',
                'series'=>'nullable|max:255',
                'sale_date'=>'nullable|date_format:Y/m/d',
                'type'=>'nullable|max:255',
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'Il campo Title deve essere compilato',
            'title.min' => 'Il campo Title deve essere lungo almeno :min caratteri',
            'description.max' => 'Il campo Description non può contenere più di :max caratteri',
            'thumb.max' => 'Il campo Thumb non può contenere più di :max caratteri',
            'price.decimal' => 'Il campo Price deve contenere un prezzo con 2 numeri decimali',
            'sale_date.date_format' => 'Il campo Sale date deve essere formattato come Y/m/d',
            'type.max' => 'Il campo Type non può contenere più di :max caratteri',
        ];
    }
}