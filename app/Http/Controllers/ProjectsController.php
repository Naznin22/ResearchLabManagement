<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Project;
use App\Profile;
use App\whychooseus;
use User;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $s = $request->input('s');
        $whychooseuses= whychooseus::all();
        $profiles= Profile::all();
        $projects = Project::where('public',1)
            ->search($s)
             ->paginate(20);
        // return view('projects.index')->with('projects', $projects);
        return view('welcome' , compact('projects', 's','whychooseuses','profiles'));
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
        // $this->validate($request,[
        //     'email'=>'required',
        //     'subject'=>'required',
        //     'body'=>'required'
        // ]);
    
        //create selected
        $project = new Project;
        $project->Project_ID = $request->input('id');
        $project->Project_Title = $request->input('name');
        $project->details = $request->input('details');
       
        $project->save();

        // return redirect('/indexS');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show')->with('project',$project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit')->with('project',$project);
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
        // $project->Project_ID = $request->input('id');
        // $project->Project_Title = $request->input('name');
        // $project->details = $request->input('details');
       
        // $selected->save();
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
