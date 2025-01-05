<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Models\SupplierItem;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplierPage()
    {
        $data = SupplierItem::latest()->get();
        return view('frontend.supplier.index', compact('data'));
    }

    public function store(Request $request)
    {
        Supplier::insert([
            'location' => $request->location,
            'supplier_item' => $request->supplier_item,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Supplier Insert successfully.');
    }

    public function supplierList()
    {
        $data = Supplier::latest()->get();
        return view('backend.pages.supplier.index', compact('data'));
    }
}
