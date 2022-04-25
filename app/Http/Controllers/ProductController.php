<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
       $data = Product::paginate();

       return view('admin.product.index', compact('data'));
    }
    public function create()
    {
        $cats = Category::orderBy('name','ASC')->get();
        return view('admin.product.create', compact('cats'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|unique:products',
            'category_id' => 'required',
            'price' => 'required',
            'upload' => 'required|mimes:jpeg,jpg,png,gif,bmp'
        ], [
            'upload.required' => 'File không để trống',
            'upload.mimes' => 'Định dạng file là: jpeg, jpg, png, gif, bmp',
        ]);

        $ext = $req->upload->extension();
        $file_name = time().'.'.$ext;
        $req->upload->move(public_path('uploads'), $file_name);

        $data = $req->only('name','price','sale_price','category_id','status','desr');
        $data['image'] = $file_name;
        // dd($data);
        Product::create($data);

    }
}

