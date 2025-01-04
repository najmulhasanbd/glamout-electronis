<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{

    protected $contactUs;

    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs = $contactUs;
    }


    public function contactPage()
    {
        return view('frontend.contact.index');
    }

    public function store(ContactRequest $request)
    {
        $this->contactUs::create([
            'location' => $request->location,
            'related' => $request->related,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
