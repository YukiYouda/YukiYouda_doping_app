<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Supplement;

class ReviewController extends Controller
{
    public function create()
    {
        return view('reviews.create');
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

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
