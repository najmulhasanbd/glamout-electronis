<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brouchure;
use Illuminate\Http\Request;

class BrouchureController extends Controller
{
    public function brochurePage()
    {
        $data=Brouchure::latest()->get();
        return view('frontend.brochure.index',compact('data'));
    }
}
