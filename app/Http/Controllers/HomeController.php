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
        // dd(auth()->guard('customer')->user()->name);
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

     public function login()
     {
        return view('customer.login');
     }

     public function post_login(Request $req)
     {
        $data = $req->only('email','password');
        $check = auth()->guard('customer')->attempt($data);
        if ($check) {
           return redirect()->route('home')->with('ok','Chào mừng trở lại');
        }
        return redirect()->back()->with('no','Đăng nhập thất bại');
     }

     public function logout()
     {
        auth()->guard('customer')->logout();
        return redirect()->route('home.login')->with('ok','Chào mừng trở lại');
     }
}

?>