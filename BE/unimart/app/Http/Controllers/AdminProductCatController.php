<?php

namespace App\Http\Controllers;


use App\ProductCat;
use Illuminate\Http\Request;

class AdminProductCatController extends Controller
{
    //
    function index()
    {
        $productCat = ProductCat::all();
        $total = $productCat->count();
        return view('admin.productCat.index', compact('productCat', 'total'));
    }

    function add()
    {
        $productCat = ProductCat::all();
        $total = $productCat->count();
        return view('admin.productCat.index', compact('productCat', 'total'));
    }

    function store(Request $request)
    {
        if ($request->input('btn-add')) {
            $request->validate(
                [
                    'name' => 'required | string | min: 3 | max: 255 | unique:product_cats',
                ],
                [
                    'required' => ':attribute không được để trống',
                    'min' => ':attribute có độ dài ít nhất :min kí tự',
                    'max' => ':attribute có độ dài ít nhất :max kí tự',
                    'unique' => ':attribute đã được sử dụng'
                ],
                [
                    'name' => 'Tên danh mục',
                ]
            );

            ProductCat::create([
                'name' => $request->input('name'),
            ]);
            return redirect('admin/product/cat')->with('status', 'Thêm danh mục mới thành công');
        }
    }

    function edit($id){
        $productCat = ProductCat::all();
        $total = $productCat->count();

        $cat = ProductCat::find($id);
        return view('admin.productCat.edit', compact('productCat', 'total', 'cat'));
    }

    function action(Request $request, $id)
    {
        $cat = ProductCat::find($id);
        if ($request->input('btn-edit')) {
            $request->validate(
                [
                    'name' => 'required | string | min: 3 | max: 255 | unique:product_cats',
                ],
                [
                    'required' => ':attribute không được để trống',
                    'min' => ':attribute có độ dài ít nhất :min kí tự',
                    'max' => ':attribute có độ dài ít nhất :max kí tự',
                    'unique' => ':attribute đã được sử dụng'
                ],
                [
                    'name' => 'Tên danh mục',
                ]
            );

            $name = $request->input('name');
            $cat->name = $name;
            $cat->save();
            return redirect('admin/product/cat')->with('status', 'Cập nhật danh mục thành công');
        }
    }

    function delete($id){
        $cat = ProductCat::find($id);
        $cat->delete();
        return redirect('admin/product/cat')->with('delete', 'Bạn đã xóa danh mục thành công');
    }
}
