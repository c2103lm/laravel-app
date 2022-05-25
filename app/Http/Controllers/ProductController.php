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
    public function show (Product $product)
    {
        return view('admin.product.show', compact('product'));
    }
    public function create()
    {
        $cats = Category::orderBy('name','ASC')->get();
        return view('admin.product.create', compact('cats'));
    }

    public function store()
    {

        // dd (request()->all());
        $image_list = [];
        request()->validate([
            'name' => 'required|unique:products',
            'category_id' => 'required',
            'price' => 'required',
            'upload' => 'required|mimes:jpeg,jpg,png,gif,bmp'
        ], [
            'upload.required' => 'File không để trống',
            'upload.mimes' => 'Định dạng file là: jpeg, jpg, png, gif, bmp',
        ]);
        
        $ext = request()->upload->extension();
        $file_name = time().'.'.$ext;
        request()->upload->move(public_path('uploads'), $file_name);
        // upload nhiều ảnh
        if (request()->has('uploads')) {
            foreach(request()->uploads as $key => $file) {
                $ext1 = $file->extension();
                $file_name1 = time().$key.'.'.$ext1;
                $file->move(public_path('uploads'), $file_name1);
                $image_list[] = $file_name1;
            }
        }

        $data = request()->only('name','price','sale_price','category_id','status','desr');
        // dd (json_encode($image_list));
        $data['image'] = $file_name;
        $data['image_list'] = json_encode($image_list);
        // dd($data);
        if (Product::create($data)) {
            return redirect()->route('product.index')->with('ok','Thêm mới thành công');
        }
        return redirect()->route('product.index')->with('no','Thêm mới không thành công');

    }
} 