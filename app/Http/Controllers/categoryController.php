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
    public function getEdit()
    {
        return View('admin.category.edit');
    }
    public function getAdd()
    {
        return View('admin.category.add');
    }
}
