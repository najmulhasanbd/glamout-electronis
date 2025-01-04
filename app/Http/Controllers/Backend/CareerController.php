<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\CareerPath;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $career = Career::latest()->get();
        return view('backend.pages.career.index', compact('career'));
    }

    public function destroyCareere($id)
    {
        $data = Career::findOrFail($id);

        // Check and delete the file
        if (file_exists(public_path('upload/career/' . $data->cv))) {
            unlink(public_path('upload/career/' . $data->cv));
        }

        $data->delete();

        return redirect()->back()->with('success', 'Career  Delete Success');
    }


    public function path()
    {
        $data = CareerPath::latest()->get();
        return view('backend.pages.career.path', compact('data'));
    }

    public function store(Request $request)
    {
        CareerPath::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', 'Career Path Add Success');
    }
    public function destroy($id)
    {
        $data = CareerPath::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Career Path Delete Success');
    }
}
