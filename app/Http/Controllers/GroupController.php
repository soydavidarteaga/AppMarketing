<?php

namespace Marketing\Http\Controllers;

use Illuminate\Http\Request;
use Marketing\Agend;
use Redirect;
use Auth;
use Marketing\Contact;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $agends = Agend::all();
        return view('agends.index',compact('agends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agends.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agend = New Agend;
        $agend->group = $request->group;
        $agend->user_id = Auth::user()->id;
        $agend->save();
        return Redirect::to('app/Agenda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $agend = Agend::find($id);
      $contacts = Contact::where('agends_id',$id)->get();
        return view('agends.show',compact('agend','contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agend = Agend::find($id);
        return view('agends.edit',compact('agend'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $agend = Agend::find($id);
      $agend->group = $request->group;
      $agend->save();
      return Redirect::to('app/Agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agend = Agend::destroy($id);
        return Redirect::to('app/Agenda');
    }
}
