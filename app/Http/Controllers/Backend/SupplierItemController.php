<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SupplierItem;
use Illuminate\Http\Request;

class SupplierItemController extends Controller
{
    public function index()
    {
        $data = SupplierItem::latest()->get();
        return view('backend.pages.supplier-item.index', compact('data'));
    }

    public function store(Request $request)
    {
        SupplierItem::insert([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Supplier Item Insert Successfully.');
    }

    public function update(Request $request, $id)
    {
        SupplierItem::findOrFail($id)->update([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success', 'Supplier Item Update Successfully.');
    }

    public function destroy(SupplierItem $item)
    {
        $item->delete();
        return redirect()->back()->with('success', 'Supplier Item Deleted Successfully.');
    }
}
