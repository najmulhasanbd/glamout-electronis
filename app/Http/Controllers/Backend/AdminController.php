<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    } // end method

   
}
