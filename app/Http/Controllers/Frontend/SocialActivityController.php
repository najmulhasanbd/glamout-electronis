<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SocialActivity;
use Illuminate\Http\Request;

class SocialActivityController extends Controller
{
    public function socialActivity(){
        $data=SocialActivity::first();
        return view('frontend.social_activity.index',compact('data'))   ;
    }
}
