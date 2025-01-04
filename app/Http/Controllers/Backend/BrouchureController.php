<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brouchure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BrouchureController extends Controller
{

    protected $brouchure;

    public function __construct(Brouchure $brouchure)
    {
        $this->brouchure = $brouchure;
    }

    public function index()
    {
        $brouchure = $this->brouchure::latest()->get();
        return view('backend.pages.brouchure.index', compact('brouchure'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Ensure thumbnail is an image
            'pdf' => 'required|mimes:pdf|max:20480',
        ]);

        // Handle the thumbnail file upload
        $thumbnailFilename = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailFilename = 'brouchure_thumbnail_' . date('YmdHi') . '.' . $thumbnail->getClientOriginalExtension();

            // Save resized thumbnail
            $thumbnailPath = public_path('upload/brouchure/thumbnails');
            if (!file_exists($thumbnailPath)) {
                mkdir($thumbnailPath, 0777, true);
            }
            Image::make($thumbnail)
                ->resize(420, 420)
                ->save($thumbnailPath . '/' . $thumbnailFilename);
        }

        // Handle the PDF file upload
        $pdfFilename = null;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfFilename = 'brouchure_' . date('YmdHi') . '.' . $pdf->getClientOriginalExtension();

            // Save PDF file
            $pdfPath = public_path('upload/brouchure/pdfs');
            if (!file_exists($pdfPath)) {
                mkdir($pdfPath, 0777, true);
            }
            $pdf->move($pdfPath, $pdfFilename);
        }

        // Create the Brouchure record
        Brouchure::create([
            'name' => $request->name,
            'thumbnail' => $thumbnailFilename, // Save thumbnail file name
            'pdf' => $pdfFilename, // Save PDF file name
        ]);

        return redirect()->back()->with('success', 'Brouchure Inserted Successfully!');
    }


    public function edit(Brouchure $brouchure)
    {
        return view('admin.brouchure.edit', compact('brouchure'));
    }
    public function update(Request $request, Brouchure $brouchure)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:20480',
        ]);

        // Update the name
        $brouchure->update(['name' => $request->name]);

        // Handle PDF file upload
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfFilename = 'brouchure_' . date('YmdHi') . '_' . $pdf->getClientOriginalName();

            // Create directory if not exists
            $pdfPath = public_path('upload/brouchure/pdfs');
            if (!file_exists($pdfPath)) {
                mkdir($pdfPath, 0777, true);
            }

            $pdf->move($pdfPath, $pdfFilename);

            // Remove old PDF if exists
            if ($brouchure->pdf && file_exists($pdfPath . '/' . $brouchure->pdf)) {
                unlink($pdfPath . '/' . $brouchure->pdf);
            }

            $brouchure->update(['pdf' => $pdfFilename]);
        }

        // Handle Thumbnail file upload
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailFilename = 'brouchure_thumbnail_' . date('YmdHi') . '.' . $thumbnail->getClientOriginalExtension();

            // Create directory if not exists
            $thumbnailPath = public_path('upload/brouchure/thumbnails');
            if (!file_exists($thumbnailPath)) {
                mkdir($thumbnailPath, 0777, true);
            }

            // Resize and save the thumbnail
            Image::make($thumbnail)
                ->resize(420, 420)
                ->save($thumbnailPath . '/' . $thumbnailFilename);

            // Remove old thumbnail if exists
            if ($brouchure->thumbnail && file_exists($thumbnailPath . '/' . $brouchure->thumbnail)) {
                unlink($thumbnailPath . '/' . $brouchure->thumbnail);
            }

            $brouchure->update(['thumbnail' => $thumbnailFilename]);
        }

        return redirect()->back()->with('success', 'Brouchure updated successfully!');
    }


    public function destroy(Brouchure $brouchure)
    {
        // Delete the PDF file if it exists
        if ($brouchure->pdf && file_exists(public_path('upload/brouchure/pdfs/' . $brouchure->pdf))) {
            unlink(public_path('upload/brouchure/pdfs/' . $brouchure->pdf));
        }

        // Delete the Thumbnail file if it exists
        if ($brouchure->thumbnail && file_exists(public_path('upload/brouchure/thumbnails/' . $brouchure->thumbnail))) {
            unlink(public_path('upload/brouchure/thumbnails/' . $brouchure->thumbnail));
        }

        // Delete the database record
        $brouchure->delete();

        return redirect()->back()->with('success', 'Brouchure Deleted Successfully.');
    }
}
