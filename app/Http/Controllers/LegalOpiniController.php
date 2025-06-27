<?php

namespace App\Http\Controllers;

use App\Models\legal_opini;
use Illuminate\Http\Request;

class LegalOpiniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.legal-opini');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(legal_opini $legal_opini)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(legal_opini $legal_opini)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, legal_opini $legal_opini)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(legal_opini $legal_opini)
    {
        //
    }
}
