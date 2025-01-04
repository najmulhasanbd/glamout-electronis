<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\CareerPath;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function careerPage()
    {
        $data = CareerPath::latest()->get();
        return view('frontend.career.index', compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:careers,email',
            'phone' => 'required',
            'career' => 'required',
            'cv' => 'required|mimes:pdf',
        ], [
            'email.unique' => 'This email address is already in use.',
        ]);

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $filename = $request->name . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('upload/career');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $file->move($destinationPath, $filename);

            $cvFilename = $filename;
        }

        Career::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'career' => $request->career,
            'cv' => $cvFilename,
        ]);

        return redirect()->back()->with('success', 'Form Submitted Successfully');
    }
}
