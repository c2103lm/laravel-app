<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\Category\CategoryRequestStore as ReqStore;
use App\Http\Requests\Category\CategoryRequestUpdate as ReqUpdate;


class CategoryController extends Controller
{
    public function index (Request $req)
    {
        $data = Category::search()->paginate();
        return view('admin.category.index', compact('data'));
    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(ReqStore $req)
    {
        if (Category::add()) {
            return redirect()->route('category.index')->with('ok','Thêm mới thành công');
        }
        return redirect()->route('category.index')->with('no','Thêm mới không thành công');
    }

    // CategoryController::delete
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('ok','Xóa thành công');

    }

    public function edit (Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(ReqUpdate $req, Category $category)
    {
        $category->updateCategory();
        return redirect()->route('category.index')->with('ok','Cập nhật thành công');;
    }


    // thông tin danh mục trong thùng rác
    public function trashed()
    {
        $data = Category::search()->onlyTrashed()->paginate();
        return view('admin.category.trashed', compact('data'));
    }

    public function restore ($id)
    {
        $category = Category::withTrashed()->find($id);

        // dd($category);
        $category->restore();
        return redirect()->route('category.index')->with('ok','Khôi phục thành công');;
    }

    public function forceDelete($id)
    {
        $category = Category::withTrashed()->find($id);

        // dd($category);
        if ($category->products->count() > 0) {
            return redirect()->route('category.index')->with('no','Danh mục này dang có sản phẩm than chiếu');;
        }
        
        $category->forceDelete();

        return redirect()->route('category.index')->with('ok','Xóa dữ liệu vĩnh viên thành công');;
    }
}
