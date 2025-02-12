<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index() {
        // debug and die
        // dd('index');

        // $items = Item::all();
        // dd($items);

        return view(
            'items.index', 
            ['items' => Item::with('category')->get()]);
    }

    public function create() {
        return view(
            'items.create', 
            ['categories' => Category::all()]);
    }

    public function store(Request $request) {
        // dd($request);
        // Item::create($request->all());

        $item = new Item();

        $item->name = $request->get('name');
        $item->cost = $request->get('cost');
        $item->price = $request->get('price');
        $item->is_active = $request->get('is_active');
        $item->category_id = $request->get('category_id');
        
        $item->save();

        return redirect()->route('items.index');
    }

    public function show($id) {
        return view('items.show', [
            'item' => Item::findOrFail($id)
        ]);
    }

    public function edit($id) {
        return view('items.edit', [
            'item' => Item::findOrFail($id),
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, $id) {
        $item = Item::findOrFail($id);
        // dd($Item);

        $item->name = $request->get('name');
        $item->cost = $request->get('cost');
        $item->price = $request->get('price');
        $item->is_active = $request->get('is_active');
        $item->category_id = $request->get('category_id');

        $item->save();

        return redirect()->route('items.index');
    }

    public function destroy(Request $request, $id) {
        if($request->get('id') == $id ) {
            Item::destroy($id);
        }
        
        return redirect()->route('items.index');
    
    }
}
