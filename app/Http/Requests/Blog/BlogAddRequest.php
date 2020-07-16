<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogAddRequest extends FormRequest
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
            'title' => 'required|unique:blogs,title',
            'upload' =>'mimes:jpeg,png,gif',
            'content' => 'required|max:200',
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
            'title.required' => 'Tiêu đề danh mục không được để trống',
            'content.required' => 'Mô tả Danh mục không được để trống',
            
        ];
    }
}
