<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = reviews::latest()->get();
        return view('admin.rating', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reviews = reviews::latest()->get();
        return view('interface.contact', compact('reviews'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rating' => 'required',
            'message' => 'required',
        ]);

        reviews::create([
            'name' => $request->name,
            'rating' => $request->rating,
            'message' => $request->message,
            'submitted_at' => now(),
        ]);

        return redirect()->route('reviews.create')->with('success', 'Review submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reviews $reviews)
    {
        //
    }
}
