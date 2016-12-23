<?php

namespace Marketing\Http\Controllers;

use Illuminate\Http\Request;
use Marketing\Contact;
use Redirect;

class ContactController extends Controller
{
    public function create($id)
    {
      return view('contacts.create',compact('id'));
    }
    public function store(Request $request)
    {
      $contact = New Contact;
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->agends_id = $request->agends_id;
      $contact->save();
      return Redirect::to('app/Agenda/'.$request->agends_id);
    }
    public function edit($id){
      $contact = Contact::find($id);
      $id = $contact->agends_id;
      return view('contacts.edit',compact('contact','id'));
    }
    public function update($id, Request $request)
    {
      $contact = Contact::find($id);
      $contact->fill($request->all());
      $contact->save();
      return Redirect::to('app/Agenda/'.$request->agends_id);
    }
    public function destroy($id)
    {
      $agend = Contact::find($id)->agends_id;
      $contact = Contact::destroy($id);
      return Redirect::to('app/Agenda/'.$agend);
    }
}
