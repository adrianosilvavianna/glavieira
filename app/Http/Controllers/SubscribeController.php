<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribeMail;
use App\Mail\SubscribeFast;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        $subscribe = Subscribe::create($request->all());
        // Mail::to($request->email)->send(new SubscribeMail($request));
        // Mail::to(env('MAIL_FROM_ADDRESS', 'glavieirastudio@gmail.com'))->send(new SubscribeFast($request)); 
    }
 }
