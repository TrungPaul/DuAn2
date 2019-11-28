<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact');
    }
    public function add(ContactRequest $request)
    {	
        $data = $request->except('_token');
        Contact::create($data);
        $action_contact = true;
        return redirect()->route('view_contact', compact('action_contact'));
    }
}
