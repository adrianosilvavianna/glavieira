<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function sendContact(Request $request)
    {
        $this->contact->create($request->all());

        Mail::to($request->email)->send(new ContactMail($request));
    }

    public function subscribe(Request $email)
    {
        
    }
}
