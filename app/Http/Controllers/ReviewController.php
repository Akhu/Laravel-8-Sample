<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function listReview(){
        return view('components.reviews.review', [
            'reviews' => Review::all()]);
    }
}
