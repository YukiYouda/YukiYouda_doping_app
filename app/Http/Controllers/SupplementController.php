<?php

namespace App\Http\Controllers;

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
        return view('supplements.show', compact('supplement'));
    }
}
