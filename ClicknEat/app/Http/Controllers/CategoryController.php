<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Restaurant;

class CategoryController extends Controller
{
    public function index() {
        // debug and die
        // dd('index');

        // $categories = Category::all();
        // dd($categories);

        return view(
            'categories.index', 
            ['categories' => Category::with('restaurant')->get()

            // all() génère beaucoup plus de requêtes (voir debugbar)
            // 'categories' => Category::all()
        ]);
    }

    public function create() {
        return view(
            'categories.create', 
            ['restaurants' => Restaurant::all()]);
    }

    // enregistre le create
    public function store(Request $request) {
        // dd($request);
        // Category::create($request->all());

        $category = new Category();

        $category->name = $request->get('name');
        $category->restaurant_id = $request->get('restaurant_id');
        
        $category->save();
        
        return redirect()->route('categories.index');
    }

    public function show($id) {
        return view('categories.show', [
            'category' => Category::findOrFail($id)
        ]);
    }

    public function edit($id) {
        return view('categories.edit', [
            'category' => Category::findOrFail($id),
            'restaurants' => Restaurant::all()
        ]);
    }

    // enregistre le edit
    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);
        // dd($Category);

        $category->name = $request->get('name');
        $category->restaurant_id = $request->get('restaurant_id');

        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy(Request $request, $id) {
        if($request->get('id') == $id ) {
            Category::destroy($id);
        }
        
        return redirect()->route('categories.index');
    
    }
}
