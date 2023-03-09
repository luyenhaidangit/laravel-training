<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    //
    public function index()
    {
        // Trả về view cho giao diện hiển thị danh sách sản phẩm
        return view('productcategories.index');
    }

    public function create() {
        return view('productcategories.create');
    }

}
