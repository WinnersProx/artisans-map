<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        sleep(3);
    	$maillable = new ContactMessageCreated($request->name, $request->email, $request->content);
    	Mail::to(env('ADMIN_SUPPORT_EMAIL'))
            ->send($maillable);

        flashy(sprintf('Thank you for reaching out  %s, we\'ll get back to you!', $request->name));

    	return redirect()->route('home');
    }
}
