<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Profile;
use App\Member;
use App\whychooseus;
use Redirect;
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
        // return view('adminPanel' , compact('profiles'));
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
            
            // 'budget'=>'required',
            // 'completion'=>'required'
        ]);
    
        //create selected
        $project = new Project;
        
        $project->Project_ID = $request->input('id');
        $project->Project_Title = $request->input('title');
        $project->Project_details = $request->input('details');
        $project->link = $request->input('link');
        $project->members->project_members = $request->input('members');
        
        $project->Budget = $request->input('budget');
        $project->Completion= $request->input('completion');
        $project->public = $request->input('public');

        $project->push();

       

        return redirect('/adminPanelUser/#projects');
    }


    public function storeWhychoose(Request $request)
    {
        $this->validate($request,[
            
            'title'=>'required',
            'description'=>'required',
           
        ]);
    
        

        $whychooseus = new whychooseus;
        $whychooseus->title = $request->input('title');
        $whychooseus->description = $request->input('description');
        $whychooseus->save();
        
       
        

        return Redirect::back() ;
    }


    public function storeProfiles(Request $request)
    {
        $this->validate($request,[
            'id' => 'required',
            'file'=>'required|file|mimes:jpg,jpeg,png,doc,pdf,svg,gif|max:10000'
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

        $profile = new Profile;
        $profile->id = $request->input('id');
        // $profiles->name = $request->input('name');
        $profile->date_of_birth = $request->input('date_of_birth');
        $profile->phone_number = $request->input('phone_number');
        $profile->website = $request->input('website');
        $profile->address = $request->input('address');
        // $profile->education = $request->input('education');
        $profile->profession = $request->input('profession');
        $profile->personal_experience= $request->input('personal_experience');
        
        $profile->file = $fileNameToStore;
        $profile->save();
        
       
        

        return redirect('/adminPanelUser') ;
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
            // 'budget'=>'required',
            // 'completion'=>'required'
        ]);
    
        //create selected
        $project = Project::find($id);
        // $project->Project_ID = $request->input('id');
        $project->Project_Title = $request->input('title');
        $project->Project_details = $request->input('details');
        // $project->members->project_members = $request->input('members');
        $project->link = $request->input('link');
        $project->Budget = $request->input('budget');
        $project->Completion= $request->input('completion');
        $project->public= $request->input('public');
        $project->push();

        return redirect('/adminPanelUser')->with('success','project updated');
    }


    public function editprofile(Request $request, $id)
    {
       
        

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect('/adminPanelUser');
    }

    public function destroywhychooseus($id)
    {
       
    }
}
