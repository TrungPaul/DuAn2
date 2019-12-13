<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
use App\Http\Requests\ContactRequest;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
    public function add(ContactRequest $request)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $contact = new Contact;

        $contact->created_at = $dt;
        $contact->fill($request->all());
        $contact->save();

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

    public function send_reply(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
        ]);
        $name = $request->name;
        $email = $request->email;
        $content = $request->content;
       
        Mail::send('mailreplycontact', [
            'name' => $name,
            'content' => $content,
        ], function ($msg) use ($email){
            $msg->to($email, 'Phản hồi liên hệ')->subject('Phản hồi liên hệ');
        });
        return redirect()->route('admin.listcontact')->with('message_reply', 'Phản hồi liên hệ thành công!');
    }
}
