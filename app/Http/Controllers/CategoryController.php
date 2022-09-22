<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
// use App\Http\Controllers\CategoryController;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    public function index()
    {
    	 //get posts
         $data = category::all();

         //return collection of posts as a resource
        //  return new KategoriResource(true, 'List Data Posts', $category);
        return view('add', compact('data'));

 
    }
    
}

