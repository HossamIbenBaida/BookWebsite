<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function addcategorie(){
         return view('admin.addcategory');
        }
        public function savecategory(Request $req){
            $categorie = new Category();
            $categorie->categorie = $req->input('category_name');
            $categorie->save();
            return back()->with('status','categorie saved');
        }
        public function allcategories(){
           $categories = Category::all();
            return view('admin.categories')->with('categories' , $categories);
        }
        public function edit_category($id){
            $categorie = Category::find($id);
            return view('admin.edit_category')->with('categorie' , $categorie);
        }

        public function updatecategory(Request $request){
            $categorie = Category::find($request->input('id'));
            $categorie->categorie = $request->input('category_name');
            $categorie->update();
            return redirect('/categories')->with('status','categorie updated');

        }
        public function deletecategory( $id){
            $categorie = Category::find($id);
            $categorie->delete();
            return redirect('/categories')->with('status','categorie deleted');

        }
}
