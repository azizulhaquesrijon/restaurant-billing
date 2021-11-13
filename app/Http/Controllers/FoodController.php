<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use Illuminate\Validation\Rule;


class FoodController extends Controller
{
    //
    //
    public function index()
    {

      $item=Food::with('category')->get();
      return View('food.item.index',['item'=>$item]);

    }

    public function create()
    {


      $category=Category::all();

      return View('food.item.create',['category'=>$category]);
    }

    public function store(Request $request)
    {
      $messages = [
        'foodname.unique' => 'Given item name and category are not unique',
        ];
      $validated = $request->validate([
         'foodname'  => [
              'required',
               Rule::unique('food')->where(function ($query) use ($request) {
                   return $query
                       ->where('foodname',$request->foodname)
                       ->where('category_id',$request->category_id);
               }),
           ],
           $messages
    ]);
      $item=new Food();
      $item->foodname=$request->foodname;
      $item->price=$request->price;
      $item->vat=$request->vat;
      $item->category_id=$request->category_id;
      $item->foodcode=$request->code;

      $item->save();
      return redirect()->route('food.index');
    }

    public function edit($id)
    {
      $category=Category::all();
      $food=Food::findOrFail($id);
      return View('food.item.edit',['food'=>$food,'category'=>$category]);
    }

    public function update(Request $request,$id)
    {
     $validated = $request->validate([
       'foodname'  => [
             'required',
             Rule::unique('food')->where(function ($query) use ($request) {
                 return $query
                     ->where('foodname',$request->foodname)
                     ->where('category_id',$request->category_id);
             })->ignore($id),
         ],
       ]);

      $item=Food::findOrFail($id);
      $item->foodname=$request->foodname;
      $item->price=$request->price;
      $item->vat=$request->vat;
      $item->category_id=$request->category_id;
      $item->foodcode=$request->code;

      $item->save();
      return redirect()->route('food.index');
    }

    public function destroy($id)
    {
      $food=Food::findOrFail($id);
      $food->delete();
      return redirect()->back();
    }

    public function fetch_item($code){

      $item=Food::where('foodcode',$code)->first();
      return Response()->json($item);

    }
    public function submit_item(Request $request){
      // if ($request->ajax()) {
      //   dd($request);
      // }
      // return $request->name[0];
      $cat=new Category();
      $cat->categoryname=$request->name[0];
      $cat->save();

      // return Response()->json($data);

    }
}
