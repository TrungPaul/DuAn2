<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    public function show()
    {
        $cate = Category::all();
        return view('admin.category.list_category', compact('cate'));
    }
    public function add()
    {
    	return view('admin.category.add_category');
    }
    public function create(CategoryRequest $request)
    {
        $data = $request->except('_token');
        Category::create($data);
        return redirect()->route('admin.listcate')->with('message_add', 'Thêm danh mục thành công!');
    }
    public function edit(Category $id)
    {
        return view('admin.category.edit_category', ['cate' => $id]);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' =>'required|max:16|unique:categories,name,'.$id,
        ],
            [
                'name.required'=>"Tên danh mục không được để trống",
                'name.unique'=>"Tên danh mục đã tồn tại",
            ]
        );
        $cate = Category::find($id);
        $cate->where('id', $id)->update([
            'name' => $request->name,
        ]);
        $cate->save();
        return redirect()->route('admin.listcate')->with('message_edit', 'Sửa danh mục thành công!');
    }

    public function delete(Category $id)
    {
        $delete_post = Post::where('cate_id', '=', $id->id)->delete();
        $id->delete();
        return redirect()->back()->with('message_delete', 'Xoá danh mục thành công!');
    }

}
