<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\Boolean;

class CreateProductRequest extends FormRequest
{
    public function prepareForValidation(){
        $price = (float) $this->input('price, 0');
        $price = (int) ($price * 100);
        $this->merge([
            'active' => (boolean) $this->input('active, false'),
            'price' => $price
        ]);
    }
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
            'name' => 'required|min:5|max:50',
            'description' => 'max:255',
            'image' => 'nullable|image|max:2000',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'active' => 'required'
        ];
    }
}
