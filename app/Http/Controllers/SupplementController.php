<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplement;

class SupplementController extends Controller
{
    public function index()
    {
        $supplements = Supplement::paginate(10);
        return view('supplements.index', compact('supplements'));
    }

    public function show(Supplement $supplement)
    {
        return view('supplements.show',compact('supplement'));
    }
}
