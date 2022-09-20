<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::latest()->paginate(6);
        return view('dashboard.contacts.index',compact('contacts'));
    }

    public function show(Contact $contact){
        return view('dashboard.contacts.show', compact('contact'));
    }

    public function  destroy(Contact $contact){
        $contact->delete();
        return redirect('admin/contacts')->with('message','contact deleted');
    }
}
