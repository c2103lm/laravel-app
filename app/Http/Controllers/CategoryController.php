<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index (Request $req)
    {
        $data = Category::paginate();
        if ($req->key) {
            $key  =$req->key;
            $data = Category::where('name','like','%'.$key.'%')->paginate();
        }

        return view('admin.category.index', compact('data'));
    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|unique:categories|max:100|min:3'
        ],[
            'name.required' => 'Tên danh mục không để trống',
            'name.unique' => 'Tên danh mục đã được sử dụng',
            'name.max' => 'Tên danh mục tối đa 100 ký tự',
            'name.min' => 'Tên danh mục tối thiểu 3 ký tự'
        ]);

        Category::create($req->only('name','status'));
        // chuyển hướng
        return redirect()->route('category.index');
    }

    // CategoryController::delete
    public function delete(Category $category)
    {
        
        $category->delete();

        return redirect()->route('category.index');

    }


    public function edit (Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $req, Category $category)
    {
        // dd ($req->only('name','status'));
        $req->validate([
            'name' => 'required|max:100|min:3|unique:categories,name,'.$category->id
        ],[
            'name.required' => 'Tên danh mục không để trống',
            'name.unique' => 'Tên danh mục đã được sử dụng',
            'name.max' => 'Tên danh mục tối đa 100 ký tự',
            'name.min' => 'Tên danh mục tối thiểu 3 ký tự'
        ]);

        $category->update($req->only('name','status'));
        // chuyển hướng
        return redirect()->route('category.index');
    }
}
