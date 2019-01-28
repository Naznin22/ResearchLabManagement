<?php

namespace App\Http\Controllers;

use Mail;
use Redirect;
use Storage;
use Session;

// use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
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
            // 'file'=>'required|file|mimes:jpg,jpeg,png,doc,pdf,svg,gif|max:2048'
        ]);

        Mail::send('emails.contact',['body'=>$request->body],function($mail) use($request){
            $mail->from($request);
            $mail->to('nazninhaque7622@gmail.com');
        });
        // Mail::send( ['text' => 'mail'], ['name' => 'Rhea'], function($message){
        //     // $message->attach('D:\Rhea\Pictures\aayan');
        //         $message->to('rheanaznin47@gmail.com', 'To Naznin')->subject('Test Email');
                
        //         $message->from('nazninhaque7622@gmail.com', 'Naznin');
        // } );

    //     $data = array(
    //     'email' => $request->email,
    //     'subject' => $request->subject,
    //     'body' => $request->body
    //     );
    //     // $contact = [];
       
    //    Mail::send('emails.contact', $data, function($message) use ($data){
    //        $message->to($data->email);
    //        $message->from('nazninhaque7622@gmail.com');
    //        $message->subject('My Application');
    //        $message->body($data['subject']);
    //        $message->attach($data['file']->getRealPath(),array(
    //            'as' => 'file'. $data['file']->getClientOriginalExtension(),
    //            'mime' => $data['file']->getMimeType()
    //        ));


    //    });

    //    session::flash('success',"mail sent");

        // $contact['name'] = $request->get('name');
        // $contact['email'] = $request->get('email');
        // $contact['msg'] = $request->get('msg');
      
    
        // Mail delivery logic goes here
    
        // flash('Your message has been sent!')->success();
        // Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));
    
        // return redirect()->route('contact.create');
        return Redirect::to('/mail');
        
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
