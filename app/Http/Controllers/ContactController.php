<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Contact;
use App\Subscribe;
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
        try{
            // $this->contact->create($request->all());
            Mail::to(env('APP_EMAIL', 'glavieirastudio@gmail.com'))->send(new ContactMail($request));    
        }catch(\Exception $e){
            return $e->getMessage();
        }
        
    }

    
}
