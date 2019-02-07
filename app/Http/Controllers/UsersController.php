<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Profile;
use App\Selected;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $users = User::all();
        // $profiles = Profile::all();
        // // $userid = User::find(1);
        // return view('adminPanel',compact(['users', 'profiles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $users = User::all();
        $projects = Project::all();
        $profiles = Profile::all();
        // return view('admin')->with('resource',$resource);

        $countUser =  User::count();
        $count = Project::count();
        $selected = Selected::count();
       return view('adminPanel', compact(['projects','users','countUser','count','selected','profiles']));
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
        $user = User::find($id);
        return view('users.edit',compact('user','id'));
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
        $this->validate($request,[
            'id' => 'required',
         ]);
     
 
         $user = User::find($id);
         $user->id = $request->input('id');
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->admin = $request->input('admin');
        
         $user->save();
         return redirect('/adminPanelUser');
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
