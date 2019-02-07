<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Redirect;
use App\Application;
use Auth;

use App\Http\Requests\ContactFormRequest;

class pagesController extends Controller
{
    // public function home(){
    //     return view('pages.home');
    // }
    // public function mainhome(){
    //     return view('pages.mainhome');
    // }

    public function mainhome_for_admin(){
            return view('pages.mainhome_for_admin');
         }

    public function mainhome_for_user(){
            // return view('pages.mainhome_for_user');
            return view('about');
         }

         public function postContact(Request $request){
                $this->validate($request,[
                        'email'=>'required',
                        'subject'=>'required',
                        'message'=>'required',
                        'file'=>'required|file|mimes:jpg,jpeg,png,doc,pdf,svg,gif|max:2048'
                    ]);

                    $data = array(
                            'email' => $request->email,
                            'subject' => $request->subject,
                            'bodyMessage' => $request->message,
                            'file'=> $request->file
                            );
                          
                           
                           Mail::send('emails.contact', $data, function($message) use ($data){
                               $message->to('nazninhaque7622@gmail.com');
                               $message->from($data['email']);
                               $message->subject('My Application');
                               
                               $message->attach($data['file']->getRealPath(),array(
                                   'as' => 'file.'. $data['file']->getClientOriginalExtension(),
                                   'mime' => $data['file']->getMimeType()
                               ));
                    
                    
                           });

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

        $application = new Application;
        // $application->user_id = $request->input('id');
        $application->user_id = Auth::user()->id;
        // $application->user_name = $request->input('name');
        $application->user_name = Auth::user()->name;
        // $application->email = $request->input('email');
        // $application->email =Auth::user()->email;
        $application->subject = $request->input('subject');
        $application->body = $request->input('message');
        $application->file = $fileNameToStore;
        $application->save();

        // return Redirect::to('/mail');
        return Redirect::back();
         }
   
}
