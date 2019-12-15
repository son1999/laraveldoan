<?php

namespace App\Http\Controllers;

use App\category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        return view('backend.pages.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        if (isset($data)) {
            category::create($data);
            return redirect()->route('category.index')->with('success', 'Thêm danh mục sản phẩm thành công');
        } else {
            return session('error', 'add category faild');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::where('category.id', $id)->first();
        return view('backend.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cate_name' => 'required|min:2|max:128',
            'cate_description' => 'required|min:2',
            'cate_status' => 'required',
        ],
            [
                'cate_name.required' => 'Tên danh mục không được để trống',
                'cate_name.min' => 'Tên danh mục phải từ 2 đến 128 ký tự',
                'cate_name.max' => 'Tên danh mục phải từ 2 đến 128 ký tự',
                'cate_description.required' => 'Mô tả danh mục không được để trống',
                'cate_description.min' => 'Mô tả danh mục phải có tối thiểu 2 ký tự',
                'cate_status.required' => 'Trạng thái danh mục không được để trống',
            ]
        );
        category::find($id)->update($validatedData);
        return redirect()->route('category.index')->with('success', 'Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::findOrFail($id)->delete();
        return redirect()->route('category.index')->with('success', 'Xóa danh mục thành công');
    }
}
