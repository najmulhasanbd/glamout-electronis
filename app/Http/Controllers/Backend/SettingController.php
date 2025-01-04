<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index()
    {
        $setting = DB::table('settings')->first();
        return view('backend.pages.settings.website_setting', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        // Fetch the existing setting
        $existingSetting = DB::table('settings')->where('id', $id)->first();

        // Prepare the data to update
        $setting = [
            'email' => $request->email,
            'address' => $request->address,
            'description' => $request->description,
            'phone' => $request->phone,
            'whatsapp' => $request->whatsapp,
            'messanger' => $request->messanger,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'updated_at' => Carbon::now(),
        ];

        //logo
        if ($request->file('logo')) {
            $file = $request->file('logo');
            if (!empty($existingSetting->logo) && file_exists(public_path('upload/logo/' . $existingSetting->logo))) {
                unlink(public_path('upload/logo/' . $existingSetting->logo));
            }
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/logo'), $filename);
            Image::make(public_path('upload/logo') . '/' . $filename)->resize(190, 88)->save(public_path('upload/logo') . '/' . $filename);
            $setting['logo'] = $filename;
        }

        //favicon
        if ($request->file('favicon')) {
            $file = $request->file('favicon');
            if (!empty($existingSetting->favicon) && file_exists(public_path('upload/favicon/' . $existingSetting->favicon))) {
                unlink(public_path('upload/favicon/' . $existingSetting->favicon));
            }
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/favicon'), $filename);
            Image::make(public_path('upload/favicon') . '/' . $filename)->resize(16, 16)->save(public_path('upload/favicon') . '/' . $filename);
            $setting['favicon'] = $filename;
        }

        DB::table('settings')->where('id', $id)->update($setting);

        return redirect()->back()->with('success', 'Setting Updated Successfully!');
    }
}
