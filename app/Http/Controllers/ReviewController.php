<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('review-list', ['reviews' => Review::GetAll()]);
    }

    public function store(Request $request)
    {
        Review::Add($request);
        return redirect('/reviews');
    }

    public function delete(Request $request, $id)
    {
        Review::DeleteReview($request, $id);
        return redirect(route('reviews'));
    }
}

