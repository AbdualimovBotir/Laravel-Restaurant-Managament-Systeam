<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Validate and store the review data
        // ...

        return redirect()->route('review.index')->with('success', 'Review submitted successfully.');
    }
}

