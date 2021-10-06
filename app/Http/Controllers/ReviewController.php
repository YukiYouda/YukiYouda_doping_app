<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Supplement;

class ReviewController extends Controller
{
    public function create(Request $request, Supplement $supplement)
    {
        $supplement_id = $request->id;
        
        return view('reviews.create', compact('supplement', 'supplement_id'));
    }

    public function store(Request $request)
    {
        $review = new Review;

        $review->score = $request->score;
        $review->title = $request->title;
        $review->description = $request->description;
        $review->supplement_id = $request->supplement_id;

        $review->save();

        return redirect()->route('supplements.index');
    }

    public function edit(Supplement $supplement, Review $review)
    {
        return view('reviews.edit', compact('supplement', 'review'));
    }

    public function update(Request $request, Supplement $supplement, Review $review)
    {
        $review->title = $request->title;
        $review->supplement_id = $request->supplement_id;
        $review->score = $request->score;
        $review->description = $request->description;

        $review->save();

        return redirect()->route('supplements.index');
    }

    public function destroy(Supplement $supplement, Review $review)
    {
        $review->delete();
        return redirect()->route('supplements.index');
    }
}
