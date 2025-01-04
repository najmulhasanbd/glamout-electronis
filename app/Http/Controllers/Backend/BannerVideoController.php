<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BannerVideo;
use Illuminate\Http\Request;

class BannerVideoController extends Controller
{
    public function index()
    {
        $bannervideo = BannerVideo::first();
        return view('backend.pages.bannervideo.index', compact('bannervideo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20480',
        ]);

        $bannerVideo = BannerVideo::findOrFail($id);

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = 'glamaur-banner' . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('upload/banner-video'), $videoName);

            if ($bannerVideo->video && file_exists(public_path('upload/banner-video/' . $bannerVideo->video))) {
                unlink(public_path('upload/banner-video/' . $bannerVideo->video));
            }

            $bannerVideo->update(['video' => $videoName]);
        }

        return redirect()->back()->with('success', 'Video updated successfully.');
    }
}
