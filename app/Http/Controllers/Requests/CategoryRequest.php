<?php

namespace App\Http\Requests;

use App\Rules\SeriaRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => '222'
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:20',
            'slug' => ['required', new SeriaRule()]
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Поле :attribute не должно быть меньше :min символов',
            'name.required' => 'Обязательное поле',
            'name.max' => 'Имя категории не должно быть больше :max символов'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'название категории'
        ];
    }
}
