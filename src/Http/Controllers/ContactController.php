<?php

namespace Mannfy\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mannfy\Contact\Mail\ContactMailable;
use Mannfy\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact::contact");
    }
    public function store(Request $request)
    {
        Mail::to($request->email)
            ->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
