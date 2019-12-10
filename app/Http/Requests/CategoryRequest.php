<?php

namespace App\Http\Requests;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cate_name' => 'required|max:128|unique:category|min:2',
            'cate_description' => 'required',
            'cate_status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải đử từ 2 đến 128 kí tự',
            'max' => ':attribute phải đử từ 2 đến 128 kí tự',
            'unique' => ':attribute đã tồn tại'
        ];
    }

    public function attributes()
    {
        return [
            'cate_name' => 'Tên danh mục',
            'cate_description' => 'Mô tả',
            'cate_status' => 'Trạng thái',
        ];
    }
}
