<?php

namespace App\Http\Requests;

use App\Rules\SeriaRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'content' => 'required|min:100',
            'image' => 'file|size:512, mimes:jpg,bmp,png'
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Поле :attribute не должно быть меньше :min символов',
            'name.max' => 'Поле :attribute не должно быть меньше :max символов',
            'name.required' => 'Обязательное поле',
            'content.min' => 'Поле :attribute не должно быть меньше :min символов',
            'image.file' => 'Изображение не должно быть больше 512 Мб',
            'image.mimes' => 'Изображение не верного формата'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'название статьи',
            'content' => 'контент'
        ];
    }
}
