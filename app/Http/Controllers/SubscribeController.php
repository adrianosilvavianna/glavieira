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
        // $subscribe = Subscribe::create(['email' => $request->email, 'number' => $request->number]);
        
        Mail::to($request->email)->send(new SubscribeMail($request));
        Mail::to(env('APP_EMAIL', 'glavieirastudio@gmail.com'))->send(new SubscribeFast($request)); 
    }
 }
