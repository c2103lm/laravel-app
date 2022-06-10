<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ApiController extends Controller
{
    public function categories()
    {
      return response(Category::paginate(3));
    }
    public function category(Category $category)
    {
      return response([
         'data' => $category
     ]);
    }
}