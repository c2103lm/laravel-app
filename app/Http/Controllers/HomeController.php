<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function home()
    {
        $cats = Category::all();
        return view('home', compact('cats'));
    }
    public function about()
    {
        $name = "About Page";
        $check = 5;
        $data = ['Hòa','Hoàng','Hùng'];
        return view('about', compact('name','data','check'));
    }
}

?>