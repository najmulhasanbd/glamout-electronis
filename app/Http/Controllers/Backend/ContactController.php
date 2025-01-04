<?php

namespace App\Http\Controllers\Backend;

use App\Models\ContactUs;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    protected $contactUs;

    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs = $contactUs;
    }

    public function contactMessage()
    {
        $contactMessage = $this->contactUs::latest()->get();
        return view('backend.pages.contact.index', compact('contactMessage'));
    } // end method

    public function contactDestroy(ContactUs $contact)
    {
        $contact->delete();
    
        return redirect()->back()->with('success', 'Contact Deleted Successfully.');
    }
    
}
