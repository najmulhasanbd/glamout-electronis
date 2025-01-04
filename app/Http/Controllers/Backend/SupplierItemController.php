<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SupplierItem;
use Illuminate\Http\Request;

class SupplierItemController extends Controller
{
    public function index(){
        $data=SupplierItem::latest()->get();
        return view('backend.pages.supplier-item.index',compact('data'));
    }
}
