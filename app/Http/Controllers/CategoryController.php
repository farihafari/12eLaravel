<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class CategoryController extends Controller
{
    //
    function AddCategory(Request $request){
        $addcat = new category();
        $categoryImage= time().".".$request->cImage->extension();
       $request->cImage->move(public_path("assets/category"),$categoryImage);
       $addcat->catName = $request->cName;
       $addcat->catImage = $categoryImage;
       $addcat->save();
       return back()->with("addCat","category Add successfully");
       

    }
    function viewCategory(){
        $viewCat = category::all();
        return view('dashmin/viewcategory',compact('viewCat'));
    }
    function viewData($primaryKey){
        $object  = category::find($primaryKey);
        return view('dashmin/edit',compact('object'));
    }
    function EditCategory(Request $request){
        $object = category::find($request->cId);
        if(isset($request->cImage)){
            $categoryImage= time().".".$request->cImage->extension();
            $request->cImage->move(public_path("assets/category"),$categoryImage);
            $object->catImage = $categoryImage;

        }
        $object->catName= $request->cName;
        $object->save();
        return redirect('details')->with('UpdateCat',"update category successfully");
    }
    function deleteCategory($primaryKey){
        $object = category::find($primaryKey);
        $object->delete();
        return redirect('details')->with('deleteCat','delete category');
    }
}
