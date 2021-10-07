<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Supplement;

class SupplementController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $category = $request->category;

        $params = $request->query();
        $supplements = Supplement::search($params)->paginate(10);

        $supplements->appends(compact('name', 'category'));
        return view('supplements.index', compact('supplements'));
    }

    public function show(Supplement $supplement)
    {
        $reviews = Review::where('supplement_id', $supplement->id)->get();
        return view('supplements.show', compact('supplement', 'reviews'));
    }

    public function create()
    { 
        $categories = Category::all();
        return view('supplements.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $supplement = new Supplement;

        $supplement->name = $request->name;
        $supplement->category_id = $request->category;
        $supplement->price = $request->price;
        $supplement->volume = $request->volume;
        $supplement->description = $request->description;
        $supplement->img_path = 'storage/supplement_image/4.jpg';
        
        $supplement->save();

        return redirect()->route('supplements.index');
    }

    public function edit(Supplement $supplement)
    {
        $categories = Category::all();
        return view('supplements.edit', compact('supplement', 'categories'));
    }

    public function update(Request $request, Supplement $supplement)
    {
        $supplement->name = $request->name;
        $supplement->category_id = $request->category_id;
        $supplement->price = $request->price;
        $supplement->volume = $request->volume;
        $supplement->description = $request->description;
        $supplement->img_path = $request->img_path;

        $supplement->save();

        return redirect()->route('supplements.index');
    }

    public function destroy(Supplement $supplement)
    {
        $supplement->delete();
        return redirect()->route('supplements.index');
    }
}
