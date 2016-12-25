<?php

namespace Marketing\Http\Controllers;

use Illuminate\Http\Request;
use Marketing\Message;
use Auth;
use Redirect;
use Marketing\Agend;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $messages = Message::where('user_id',Auth::user()->id)->get();
        return view('messages.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = New Message;
        $message->subject = $request->subject;
        $message->body = $request->body;
        $message->user_id = Auth::user()->id;
        $message->save();
        return Redirect::to('app/Mensajes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::find($id);
        return view('messages.show',compact('message'));
    }
    public function SendMail($id)
    {
      $message = Message::find($id);
      $agends = Agend::where('user_id',Auth::user()->id)->get();
      return view('messages.sendMail',compact('message','agends'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $message = Message::find($id);
      return view('messages.edit',compact('message'));
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
      $message = Message::find($id);
      $message->fill($request->all());
      $message->save();
      return Redirect::to('app/Mensajes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::destroy($id);
        return Redirect::to('app/Mensajes');
    }
}
