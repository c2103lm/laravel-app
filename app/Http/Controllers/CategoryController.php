<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index ()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $req)
    {
        Category::create($req->only('name','status'));
        dd($req->all());
    }
}
