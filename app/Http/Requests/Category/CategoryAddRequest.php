<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
            'cat_name' => 'required|unique:categories',
            'description' => 'required|max:200',
            'priority' => 'required|numeric',
        ];
    }

     /**
     * Các tin nhắn thông báo lỗi cho request form
     *
     * @return array
     */

    public function messages()
    {
        return [
            'cat_name.required' => 'tên danh mục không được để trống',
            'description.required' => 'Mô tả Danh mục không được để trống',
            'priority.required' => 'Sắp xếp không được để trống',
            'priority.numeric' => 'không được ghi chữ',
        ];
    }
}
