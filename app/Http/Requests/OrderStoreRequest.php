<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
    protected function prepareForValidation()
    {
        $this->merge([
            //'slug' => Str::slug($this->slug),
            'type' => !empty($this->type) ? $this->type : 'Message',
            'data' => !empty($this->data) ? json_encode($this->data) : json_encode([]),
        ]);
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'type' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Не заполнено поле Имя',
            'phone.required' => 'Введите номер телефона',
            'type.required' => '!!!',
        ];
    }
}
