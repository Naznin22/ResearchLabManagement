<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Member;

class ProjectsController_admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $s = $request->input('s');
        // $projects = Project::distinct('Project_ID')->get();
       
        $projects = Project::latest()
            ->search($s)
            // ->distinct()->get()
              ->paginate(20);
             
        // return view('projects.index_for_admin')->with('projects', $projects);
         return view('projects.index_for_admin' , compact('projects', 's'));
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
        $this->validate($request,[
            'id'=>'required',
            'title'=>'required',
            'details'=>'required',
            'budget'=>'required',
            'completion'=>'required'
        ]);
    
        //create selected
        $project = new Project;
        
        $project->Project_ID = $request->input('id');
        $project->Project_Title = $request->input('title');
        $project->Project_details = $request->input('details');
        $project->members->project_members = $request->input('members');
        
        $project->Budget = $request->input('budget');
        $project->Completion= $request->input('completion');
        $project->public = $request->input('public');

        
       
        $project->push();

        return redirect('/adminPanelUser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $members = Member::with('project')->get();	
		

        $project = Project::find($id);
        // $member = Member::select('project_members.*')
        // ->join('projects', 'members.Project_ID', '=', 'projects.Project_ID')
        //     ->where('projects.Project_ID', '=', '$id')
        //     ->get();
       // return view('projects.show')->with('project',$project);
       return view('projects.show' , compact('project', 'members'));
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
        return view('projects.edit',compact('project','id'));
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
            // 'id'=>'required',
            'title'=>'required',
            'details'=>'required',
            'budget'=>'required',
            'completion'=>'required'
        ]);
    
        //create selected
        $project = Project::find($id);
        // $project->Project_ID = $request->input('id');
        $project->Project_Title = $request->input('title');
        $project->Project_details = $request->input('details');
        // $project->members->project_members = $request->input('members');
        
        $project->Budget = $request->input('budget');
        $project->Completion= $request->input('completion');
        $project->public= $request->input('public');
        $project->push();

        return redirect('/adminPanelUser')->with('success','project updated');
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
