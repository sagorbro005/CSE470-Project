<?php
//app\Http\Controllers\CategoryController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as ValidatorFacade;
use Illuminate\Support\Facades\URL;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("categories.index", compact("categories"));
    }

    public function create()
    {
        return view("categories.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string|max:255"
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return Redirect::back()->with("success", "Category created successfully");
        Session::flash("success", "Category created successfully");
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view("categories.show", compact("category"));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view("categories.edit", compact("category"));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string|max:255"
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return Redirect::back()->with("success", "Category updated successfully");
        Session::flash("success", "Category updated successfully");
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return Redirect::back()->with("success", "Category deleted successfully");
        Session::flash("success", "Category deleted successfully");
    }
}
