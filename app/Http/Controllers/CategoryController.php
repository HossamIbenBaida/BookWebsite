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
}
