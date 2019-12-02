<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
    public function add(ContactRequest $request)
    {
        $data = $request->except('_token');
        Contact::create($data);
        $action_contact = true;
        return redirect()->route('view_contact', compact('action_contact'));
    }

    public function show()
    {
        $contact = Contact::all();
        return view('admin.contact.list_contact', compact('contact'));
    }

    public function reply(Contact $id)
    {
        return view('admin.contact.reply_contact', ['contact' => $id]);
    }

    public function delete(Contact $id)
    {
        $id->delete();
        return redirect()->back()->with('message_delete', 'Xoá liên hệ thành công!');
    }
}
