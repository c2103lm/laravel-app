<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;

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
    public function edit(Product $product)
    {
        $cats = Category::orderBy('name','ASC')->get();
        return view('admin.product.edit', compact('cats','product'));
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
        if ($pro = Product::create($data)) {
            if (request()->has('uploads')) {
                foreach($image_list as $img) {
                    $image_data = [
                        'image_name' => $img,
                        'product_id' => $pro->id
                    ];
                    
                    ProductImage::create($image_data);
                }
            }
            // return redirect()->route('product.index')->with('ok','Thêm mới thành công');
        }
        return redirect()->route('product.index')->with('no','Thêm mới không thành công');

    }

    public function update(Product $product)
    {

        // dd (request()->all());
        $image_list = [];
        request()->validate([
            'name' => 'required|unique:products,name, '.$product->id,
            'category_id' => 'required',
            'price' => 'required',
            'upload' => 'mimes:jpeg,jpg,png,gif,bmp'
        ], [
            'upload.mimes' => 'Định dạng file là: jpeg, jpg, png, gif, bmp',
        ]);

        $data = request()->only('name','price','sale_price','category_id','status','desr');

        if (request()->has('upload')) {
            $ext = request()->upload->extension();
            $file_name = time().'.'.$ext;
            request()->upload->move(public_path('uploads'), $file_name);
            $data['image'] = $file_name;
        }

        // upload nhiều ảnh
        if (request()->has('uploads')) {
            foreach(request()->uploads as $key => $file) {
                $ext1 = $file->extension();
                $file_name1 = time().$key.'.'.$ext1;
                $file->move(public_path('uploads'), $file_name1);
                $image_list[] = $file_name1;
                
                $image_data = [
                    'image_name' => $file_name1,
                    'product_id' => $product->id
                ];
                
                ProductImage::create($image_data);
            }

           $data['image_list'] = json_encode($image_list);
        }

       
        // dd (json_encode($image_list));
        
       
        // dd($data);
        if ($product->update($data)) {

            return redirect()->route('product.index')->with('ok','Thêm mới thành công');
        }

        return redirect()->route('product.index')->with('no','Thêm mới không thành công');

    }

    public function delete_image(ProductImage $image)
    {
        $image->delete();
        return redirect()->back()->with('ok','xóa hình ảnh thành công');
    }
} 