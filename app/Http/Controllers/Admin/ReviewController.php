<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Review;

class ReviewController extends Controller
{
    public function index()
    {
         $review = Review::where('status', 1)->orderBy('created_at', 'desc')->get();

         return view('admin.review.review', compact('review'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function disablereview(Request $request, $id)
    {
        $review = Review::find($id);
        $review->status = 0;
        $review->save();

        $request->session()->flash('success', 'Review Disabled');
        return redirect()->back();
    }

    public function enablereview(Request $request, $id)
    {
        $review = Review::find($id);
        $review->status = 1;
        $review->save();

        $request->session()->flash('success', 'Review Enabled');
        return redirect()->back();
    }

    public function disabledreviewlist()
    {
        $review = Review::where('status', 0)->orderBy('created_at', 'desc')->get();
        return view('admin.review.disabled-review', compact('review'));
    }

    public function reviewshow($id)
    {
        $review_data = Review::find($id);   
        return view('admin.review.show-review', compact('review_data'));
    }

    public function reviewdestroy($id)
    {
        Review::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Post Deleted Successfully!');
    }
}
