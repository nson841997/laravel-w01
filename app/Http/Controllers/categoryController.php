<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;

class categoryController extends Controller
{
    public function getList()
    {
        $category = TheLoai::all();
        return View('admin.category.list', ['theloai'=>$category]);
    }
    
    public function getAdd()
    {
        return View('admin.category.add');
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
        [
            'Ten'=>'required|unique:TheLoai,Ten|min:3|max:50'
        ],
        [
            'Ten.required'=>'bạn chưa nhập thông tin',
            'Ten.unique'=>'Tên đã tồn tại',
            'Ten.min'=>'Tên ngắn nhất là 3 kí tự',
            'Ten.max'=>'Tên dài nhất là 50 ký tự'
        ]);
        $category = new TheLoai;
        $category->Ten = $request->Ten;
        $category->TenKhongDau = changeTitle($request->Ten);
        $category->save();

        return redirect('admin/category/list')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id)
    {
        $category = TheLoai::find($id);
        return View('admin.category.edit',['theloai'=>$category]);
    }

    public function postEdit(Request $request, $id)
    {
        $category = TheLoai::find($id);
        $this->validate($request, 
        [
            'Ten'=>'required|unique:TheLoai,Ten|min:3|max:50'
        ], 
        [
            'Ten.required'=>'Bạn chưa nhập tên',
            'Ten.unique'=>'Tên đã tồn tại',
            'Ten.min'=>'Tối thiểu 3 ký tự',
            'Ten.max'=>'Tối đa 50 ký tự'
        ]);

        $category->Ten = $request->Ten;
        $category->TenKhongDau = changeTitle($request->Ten);
        $category->save();
        return redirect('admin/category/list/')->with('thongbao', 'Sửa thành công!');
    }


    public function getDelete($id)
    {
        $category = TheLoai::find($id);
        $category->delete();

        return redirect('admin/category/list')->with('thongbao', 'Đã xóa thành công!');
    }

}
