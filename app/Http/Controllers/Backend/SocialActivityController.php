<?php

namespace App\Http\Controllers\Backend;

use App\Models\SocialActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialActivityController extends Controller
{
    public function index()
    {
        $data = SocialActivity::first(); // Assuming only one record exists
        return view('backend.pages.social-activity.index', compact('data'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request
        $validated = $request->validate([
            'description' => 'required|string',
        ]);

        // Find the record and update it
        $socialActivity = SocialActivity::findOrFail($id);
        $socialActivity->update([
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Social Activity updated successfully!');
    }
}
