<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }

    public function store()
    {

        $contact = new Contact();

        $contact->name = 'João';
        $contact->email = 'João@gmail.com';
        $contact->telefone = '(00) 97070-7070';
        $contact->dt_nascimento = '2000-02-02';
        $contact->save();
    }

    public function update()
    {
        $contact = Contact::find(3);
        $contact->name = 'Joãozinho';
        $contact->save();

        $contact = Contact::where('name','Jane Does')->first();
        $contact->name = 'Mariana';
        $contact->save();
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
    }
}
