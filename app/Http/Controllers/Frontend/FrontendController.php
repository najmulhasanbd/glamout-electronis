<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerVideo;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $data['bannerVideo'] = BannerVideo::latest()->first();
        return view('frontend.index', $data);
    }

    public function mediaPage()
    {
        return view('frontend.media.index');
    }
}
