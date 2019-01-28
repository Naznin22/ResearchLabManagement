<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Application;
use App\User;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::all();
        return view('applications.index')->with('applications', $applications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applications.apply');
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
            'body'=>'required',
            'file'=>'required|file|mimes:jpg,jpeg,png,doc,pdf,svg,gif|max:2048'
        ]);

        //handle upload
        if($request->hasFile('file')){
            //get filename with extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('file')->storeAs('public/file',$fileNameToStore);



        }else{
            $fileNameToStore = 'noimage.jpg';
        }
    
        //create application
        $application = new Application;
        $application->user_id = $request->input('id');
        $application->user_name = $request->input('name');
        $application->email = $request->input('email');
        $application->subject = $request->input('subject');
        $application->body = $request->input('body');
        $application->file = $fileNameToStore;
        $application->save();


        

        return redirect('/apply');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application ::find($id);
        return view('applications.show')->with('application',$application);
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
