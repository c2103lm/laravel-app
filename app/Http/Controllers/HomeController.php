<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;

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

    public function product (Product $product)
    {
        // $products = $category->products()->paginate(3);
        // dd ($products);
        return view('product', compact('product'));
    }

    /**
     * Đăng ký tài khoản
     */

     public function register()
     {
        return view('customer.register');
     }

     public function post_register(Request $req)
     {
         $req->validate([
             'password' => 'required',
             'confirm_password' => 'required|same:password'
         ],[
             'confirm_password.same' => 'Xác nhận mật khẩu chưa đúng'
         ]);
         $data = $req->only('name','email','phone','address');
         $data['password'] = bcrypt($req->password);
         if (Customer::create($data)) {
             return redirect()->route('home.login');
         }
         else {
             return redirect()->back();
         }
     }
}

?>