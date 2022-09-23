<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{

    public function index()
    {
         $category = Category::all();
         return view('category.detail', [
            'category' => $category
         ]);
    }

    public function store(Request $request){
        $kategori = Category::create([
            'kategori' => $request->kategori
        ]);
        return redirect()->back();
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
    
}

