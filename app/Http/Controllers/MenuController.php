<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        $category = Category::all();
        return view('menu.detail', compact('menu', 'category'));
    }

    public function store(Request $request){
        $menu = Menu::create([
            'nama_menu' => $request->nama_menu,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
        ]);
        return redirect()->back();
    }

    public function destroy($id){
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->back();
    }
}
