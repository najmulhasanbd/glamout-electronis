<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierItemController extends Controller
{
    public function index(){
        return view('backend.pages.supplier-item.index');
    }
}
