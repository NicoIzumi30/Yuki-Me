<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index() {
    if(auth()->user()->role == 'admin') {
        $categories = Category::withCount('links')->get();
    } else {
        $categories = auth()->user()->categories()->withCount('links')->get();
    }
    return view('main.category.index', compact('categories'));
   } 

   public function store(Request $request) {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
    ]);
    $data = [
        'name' => $request->name,
        'slug' => Category::createUniqueSlug($request->name),
        'user_id' => auth()->user()->id
    ];
    Category::create($data);
    return back()->withSuccess('Kategori berhasil ditambahkan');
   }
   
   public function update(Request $request, $slug) {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
    ]);
    $category =  Category::where('slug', $slug)->first();
    $id = $category->id;
    if($category->user_id != auth()->user()->id) {
        abort(403);
    }
    $data = [
        'name' => $request->name,
        'slug' => Category::createUniqueSlug($request->name, $id),
    ];
    $category->update($data);
    return back()->withSuccess('Kategori berhasil diupdate');
   }

   public function destroy($slug) {
    $category =  Category::where('slug', $slug)->first();
    if($category->user_id != auth()->user()->id) {
        abort(403); 
    }
    $category->delete();
    return back()->withSuccess('Kategori berhasil dihapus');
   }
}
