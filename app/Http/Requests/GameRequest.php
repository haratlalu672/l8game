<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'consoles' => 'required',
            'developer' => 'required',
            'name' => 'required|unique:games,name,' . optional($this->game)->id,
            'thumbnail' => 'nullable|image|mimes:png,jpg,jpeg',
            'genres' => 'required|array'
        ];
    }
}
