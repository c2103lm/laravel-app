<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $productCarousel = Product::orderBy('id','DESC')->limit(8)->get();
        $productSale = Product::sale(3);
        return view('home', compact('productCarousel','productSale'));
    }
    
    public function about()
    {
        $name = "About Page";
        $check = 5;
        $data = ['Hòa','Hoàng','Hùng'];
        return view('about', compact('name','data','check'));
    }

    public function category(Category $category)
    {
        $products = $category->products()->paginate(3);
        // dd ($products);
        return view('category', compact('products','category'));
    }
}

?>