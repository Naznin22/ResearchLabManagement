<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class profilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('profilesadmin.index', compact(['profiles']));

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
        
       
        

        return redirect('/profilesadmin') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profiles.profile')->with('profile',$profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profilesadmin.edit',compact('profile','id'));
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
            // 'id' => 'required',
         ]);
     
 
         $profile = Profile::find($id);
        //  $profile->id = $request->input('id');
         // $profiles->name = $request->input('name');
         $profile->date_of_birth = $request->input('date_of_birth');
         $profile->phone_number = $request->input('phone_number');
         $profile->website = $request->input('website');
         $profile->address = $request->input('address');
         $profile->educations->education = $request->input('education');
         $profile->profession = $request->input('profession');
         $profile->personal_experience= $request->input('personal_experience');
         
         // $profile->file = $fileNameToStore;
         $profile->save();
         return redirect('/profilesadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();

        return redirect('/adminPanelUser');
    }
}
