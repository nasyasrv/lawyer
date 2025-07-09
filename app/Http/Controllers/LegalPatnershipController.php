<?php

namespace App\Http\Controllers;

use App\Http\Requests\legal_patnershipCreateRequest;
use App\Http\Requests\legal_patnershipUpdateRequest;
use App\Models\legal_patnership;
use Illuminate\Http\Request;

class LegalPatnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $legal_patnerships = legal_patnership::all();
        return view('admin.legal-patnership', compact('legal_patnerships'));
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
    public function store(legal_patnershipCreateRequest $request)
    {
        try {
            $data = $request->validated();

        // Upload file jika ada
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('legal_patnership', 'public');
        }

        legal_patnership::create($data);
        return redirect()->route('legal_patnership.index')->with('success', 'Legal Patnership created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(legal_patnership $legal_patnership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(legal_patnership $legal_patnership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(legal_patnershipUpdateRequest $request, legal_patnership $legal_patnership)
    {
        try {
            $data = $request->validated();

            // Upload file jika ada
            if ($request->hasFile('photo')) {
                $data['photo'] = $request->file('photo')->store('legal_patnership', 'public');
            }

            // Hapus file lama jika ada
            if ($legal_patnership->photo && $request->hasFile('photo')) {
                $oldPhotoPath = public_path('storage/' . $legal_patnership->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }
            $legal_patnership->update($data);
            return redirect()->route('legal_patnership.index')->with('success', 'Legal Patnership updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(legal_patnership $legal_patnership)
    {
        try {
            // Hapus file jika ada
            if ($legal_patnership->photo) {
                $photoPath = public_path('storage/' . $legal_patnership->photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $legal_patnership->delete();
            return redirect()->route('legal_patnership.index')->with('success', 'Legal Patnership deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
