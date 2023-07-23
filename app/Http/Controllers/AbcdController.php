<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbcdController extends Controller
{
    public function index()
    {
//        $products =  Product::with('attributes')->get();
//        return view('abcd',compact('products'));

//        //Hiển thị danh sách
        Product::all();
//        //Hiển thị mối quan hệ
        Product::with(['mối quan hệ1', 'mối quan hệ 2'])->get();
//        //tạo sản phẩm mới
        $product = new Product();
        $product->name = 'abcd';
        $product->price = '123';
        $product->save();
//        Tìm sản phẩm theo id
        $product = Product::find(1);
       //cập nhật sản phẩm
        $product->name = 'Tuường rất là ngu';
        $product->price = '1000000';
        return $product->save();

        //Xóa
        Product::find(3)->delete();

    }
}
