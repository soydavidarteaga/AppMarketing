<?php

namespace Marketing\Http\Controllers;

use Illuminate\Http\Request;
use Marketing\Config;
use Auth;
use Redirect;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $configs = Config::where('user_id',Auth::user()->id)->get();
        return view('configs.index',compact('configs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $config = New Config;
        $config->from = $request->from;
        $config->name = $request->name;
        $config->user_id = Auth::user()->id;
        $config->save();
        return Redirect::to('/app/Configuraciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $config = Config::find($id);
        return view('configs.edit',compact('config'));
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
        $config = Config::find($id);
        $config->fill($request->all());
        $config->save();
        return Redirect::to('app/Configuraciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $config = Config::destroy($id);
        return Redirect::to('app/Configuraciones');
    }
}
