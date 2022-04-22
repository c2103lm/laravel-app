<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'upload' => [
                'required',
                'mimes:jpeg,jpg,png,gif,bmp' 
            ]
        ], [
            'upload.required' => 'File không để trống',
            'upload.mimes' => 'Định dạng file là: jpeg, jpg, png, gif, bmp',
        ]);
        
        $ext = $req->upload->extension();
        $file_name = time().'.'.$ext;
        $req->upload->move(public_path('uploads'), $file_name);
        dd($file_name);
    }
}
