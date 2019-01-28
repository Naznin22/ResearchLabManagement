<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Selected;

class selectedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selecteds = Selected::all();
        return view('selecteds.indexS')->with('selecteds', $selecteds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('selecteds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'subject'=>'required',
            'body'=>'required'
        ]);
    
        //create selected
        $selected = new Selected;
        $selected->user_id = $request->input('id');
        $selected->user_name = $request->input('name');
        $selected->email = $request->input('email');
        $selected->subject = $request->input('subject');
        $selected->body = $request->input('body');
        $selected->save();

        return redirect('/indexS');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selected = Selected ::find($id);
        return view('selecteds.showS')->with('selected',$selected);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
