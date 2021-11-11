<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {

      $category=Category::all();

      return View('food.category.index',['category'=>$category]);

    }

    public function create()
    {
      return View('food.category.create');
    }

    public function store(Request $request)
    {
      $validated = $request->validate([
             'categoryname' => 'required|unique:categories',


         ]);

      $category=new Category();
      $category->categoryname=$request->categoryname;
      $category->save();
      return redirect()->back();
    }

    public function edit($id)
    {



      $category=Category::findOrFail($id);
      return View('food.category.edit',['category'=>$category]);
    }

    public function update(Request $request,$id)
    {

      $validated = $request->validate([
             'categoryname' => 'required|unique:categories,categoryname,'.$id,
         ]);
      $category=Category::findOrFail($id);
      $category->categoryname=$request->categoryname;
      $category->save();
      return redirect()->route('category.index');
    }

    public function destroy($id)
    {
      $category=Category::findOrFail($id);
      $category->delete();
      return redirect()->back();
    }

    public function design()
    {
      return View('food.category.design');

    }

}
