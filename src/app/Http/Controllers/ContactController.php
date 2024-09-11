<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    

    public function confirm(ContactRequest $request)
    {
    $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'adress', 'building', 'kind', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request) 
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'adress', 'building','kind',    'detail']); 

        Contact::create($contact);
        
        return view('thanks');
    }
}